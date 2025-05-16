<?php

//{any},{number},{string}

$route = [];

//postman
$route[] = ['GET','/postman','postman','index'];
$route[] = ['POST','/postman/request','postman','request'];

//News
/*$route[] = ['GET', '/news', 'news', 'index'];    // Display all news
$route[] = ['GET', '/news/{number}', 'news', 'show'];  // Show a news user by ID
$route[] = ['POST', '/news', 'news', 'store'];  // Store a news
$route[] = ['PUT', '/news', 'news', 'update'];  // Update a news*/


$route[] = ['GET','/','home','index'];

