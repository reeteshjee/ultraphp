<?php

use Core\QueryBuilder;
class NewsModel {

    private $db;
    private $table = 'posts';
    private $categories = 'categories';
    private $listfields = 'id,title,featured_image,published_on,breaking_image,saturday_date';

    public function __construct() {
        $this->db = new QueryBuilder();
    }

    public function latest($limit=10) {
        $this->db->select($this->listfields,$this->table);
        $this->db->select('slug',$this->categories);
        $this->db->from($this->table);
        $this->db->join($this->categories, $this->table.'.category='.$this->categories.'.id', 'left');
        $this->db->where('published', '1');
        $this->db->orderBy('published_on', 'DESC');
        $this->db->limit($limit);
        return $this->db->get();
    }

    public function breaking(){
        $this->db->select($this->listfields,$this->table);
        $this->db->select('slug',$this->categories);
        $this->db->from($this->table);
        $this->db->join($this->categories, $this->table.'.category='.$this->categories.'.id', 'left');
        $this->db->where('published','1');
        $this->db->where('breaking',1);
        $this->db->orderBy('published_on', 'DESC');
        $this->db->limit(3);
        return $this->db->get();
    }

    public function getHomeSlider($limit=5){
        $this->db->select($this->listfields,$this->table);
        $this->db->select('slug,category',$this->categories);
        $this->db->from($this->table);
        $this->db->join($this->categories, $this->table.'.category='.$this->categories.'.id', 'left');
        $this->db->where('published','1');
        $this->db->where('home_slider',1);
        $this->db->orderBy('published_on', 'DESC');
        $this->db->limit($limit);
        return $this->db->get();
    }

    public function getSaturdays($limit=50){
        $this->db->select($this->listfields,$this->table);
        $this->db->select('slug,category',$this->categories);
        $this->db->from($this->table);
        $this->db->join($this->categories, $this->table.'.category='.$this->categories.'.id', 'left');
        $this->db->where('published','1');
        $this->db->where('saturday_article',1);
        $this->db->orderBy('published_on', 'DESC');
        $this->db->limit($limit);
        return $this->db->get();
    }
}
