<?php
namespace Core;

use PDO;
use PDOException;

class QueryBuilder {
    private $pdo;
    private $table;
    private $columns = '';
    private $where = [];
    private $orderBy = [];
    private $limit;
    private $groupBy = [];
    private $join = [];
    private $tableAliases = [];

    public function __construct() {
        global $framework;
        $this->pdo = $framework->getDatabase();
    }

    public function from($table) {
        $this->table = $table;
        return $this;
    }

    public function select($columns = '*',$table=false) {
        if ($columns != '*') {
            $cols = array_filter(explode(',',$this->columns));
            $columns = explode(',',$columns);
            if($table){
                $columns = array_map(function($item) use ($table) {
                    return $table . '.' . $item;
                }, $columns);
            }
            $cols = array_merge($cols,$columns);
            $this->columns = implode(',',array_unique($cols));
        } else {
            $this->columns = '*';
        }
        return $this;
    }

    private function applyAlias($column) {
        // Assuming $this->table contains the table name (like 'posts')
        if (strpos($column, '.') === false) {
            // If the column doesn't already have a table alias, prepend it
            $column = $this->table . '.' . $column;
        }
        return $column;
    }

    public function join($table, $on, $type = 'INNER') {
        $this->join[] = [
            'type' => $type,
            'table' => $table,
            'on' => $on
        ];
        return $this;
    }

    public function where($column, $value, $operator = '=') {
        $this->where[] = [$column, $value, $operator];
        return $this;
    }

    public function groupBy($columns) {
        $this->groupBy = is_array($columns) ? $columns : [$columns];
        return $this;
    }

    public function orderBy($column, $direction = 'ASC') {
        $this->orderBy[] = [$column, $direction];
        return $this;
    }

    public function limit($limit) {
        $this->limit = $limit;
        return $this;
    }

    public function get($debug = false) {
        $query = "SELECT {$this->columns} FROM {$this->table}";

        // Add JOIN clauses
        foreach ($this->join as $j) {
            $alias = $j['alias'] ?? $j['table'];
            $query .= " {$j['type']} JOIN {$j['table']} AS {$alias} ON {$j['on']}";
        }

        // Add WHERE clauses
        if (!empty($this->where)) {
            $whereClauses = [];
            foreach ($this->where as $condition) {
                $whereClauses[] = "{$condition[0]} {$condition[2]} {$this->pdo->quote($condition[1])}";
            }
            $query .= " WHERE " . implode(' AND ', $whereClauses);
        }

        // Add GROUP BY clauses
        if (!empty($this->groupBy)) {
            $query .= " GROUP BY " . implode(', ', $this->groupBy);
        }

        // Add ORDER BY clauses
        if (!empty($this->orderBy)) {
            $orderClauses = [];
            foreach ($this->orderBy as $order) {
                $orderClauses[] = "{$order[0]} {$order[1]}";
            }
            $query .= " ORDER BY " . implode(', ', $orderClauses);
        }

        // Add LIMIT clause
        if ($this->limit) {
            $query .= " LIMIT {$this->limit}";
        }

        if ($debug) {
            echo $query;
            die;
        }

        $stmt = $this->pdo->prepare($query);
        $stmt->execute();
        $this->reset();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function reset() {
        $this->table = null;
        $this->columns = '';
        $this->where = [];
        $this->orderBy = [];
        $this->limit = null;
        $this->groupBy = [];
        $this->join = [];
        $this->tableAliases = [];
    }


    public function insert($data) {
        $columns = implode(', ', array_keys($data));
        $placeholders = implode(', ', array_fill(0, count($data), '?'));
        $query = "INSERT INTO {$this->table} ($columns) VALUES ($placeholders)";
        $stmt = $this->pdo->prepare($query);
        return $stmt->execute(array_values($data));
    }

    public function bulkInsert($columns, $rows) {
        $columnList = implode(', ', $columns);
        $placeholders = implode(', ', array_fill(0, count($columns), '?'));
        $query = "INSERT INTO {$this->table} ($columnList) VALUES ($placeholders)";
        $stmt = $this->pdo->prepare($query);

        foreach ($rows as $row) {
            $stmt->execute($row);
        }
        return true;
    }

    public function update($data) {
        $setClause = implode(', ', array_map(fn($col) => "$col = ?", array_keys($data)));
        $query = "UPDATE {$this->table} SET $setClause";

        if (!empty($this->where)) {
            $whereClauses = [];
            foreach ($this->where as $condition) {
                $whereClauses[] = "{$condition[0]} {$condition[2]} {$this->pdo->quote($condition[1])}";
            }
            $query .= " WHERE " . implode(' AND ', $whereClauses);
        }

        $stmt = $this->pdo->prepare($query);
        return $stmt->execute(array_values($data));
    }

    public function delete() {
        $query = "DELETE FROM {$this->table}";

        if (!empty($this->where)) {
            $whereClauses = [];
            foreach ($this->where as $condition) {
                $whereClauses[] = "{$condition[0]} {$condition[2]} {$this->pdo->quote($condition[1])}";
            }
            $query .= " WHERE " . implode(' AND ', $whereClauses);
        }

        $stmt = $this->pdo->prepare($query);
        return $stmt->execute();
    }

}
