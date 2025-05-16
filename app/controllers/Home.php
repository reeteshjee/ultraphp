<?php
namespace App\Controllers;
use Core\Ultra;

class Home extends Ultra{

    public function __construct(){
        parent::__construct();
    }

    public function index($params){
        view('landing');
    }

    
}
