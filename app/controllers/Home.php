<?php
namespace App\Controllers;
use Core\Ultra;

class Home extends Ultra{

    public function __construct(){
        parent::__construct();
    }

    public function landing($params){
        view('landing');
    }
    public function index($params) {
        $data = [];
        $data['latest'] = $this->model('NewsModel')->latest();
        $data['breaking'] = $this->model('NewsModel')->breaking();
        $data['slider']  = $this->model('NewsModel')->getHomeSlider();
        $saturdays = $this->model('NewsModel')->getSaturdays();
        $data['saturdays'] = [];
        foreach($saturdays as $sat){
            $data['saturdays'][$sat['saturday_date']][] = $sat;
        }
        $data['saturdays'] = array_slice($data['saturdays'],0,4);
        $data['category_html'] = '';
        for($i=0;$i<9;$i++){
            $data['category_html'] .= view('partials/layout/category',[],true);
        }
        view('home',$data);
    }

    public function about($params) {
        $data['name'] = 'About Page';
        view('home',$data);
    }
}
