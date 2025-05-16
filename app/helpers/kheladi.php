<?php

function getDetailLink($news){
    return baseURL().$news['slug'].'/'.$news['id'];
}
function getCategoryLink($news){
    return baseURL().$news['slug'];
}

function getImage($path){
    return str_replace('/uploads/','/public/uploads/',$path);
}

function defaultImage(){
    return baseURL().'default.png';
}

function getFormattedDate($date){
    return date('jS F Y',strtotime($date));
}