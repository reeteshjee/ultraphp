<?php

use Core\QueryBuilder;
class NewsModel {

    private $db;
    private $table = 'posts';
    private $categories = 'categories';
    private $listfields = 'id,title,image,date';

    public function __construct() {
        $this->db = new QueryBuilder();
    }

    public function latest($limit=10) {
        $this->db->select($this->listfields,$this->table);
        $this->db->from($this->table);
        $this->db->where('status', 1);
        $this->db->orderBy('date', 'DESC');
        $this->db->limit($limit);
        return $this->db->get();
    }

    
}
