<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);




include 'database/ConnectToDB.php';
include 'database/QueryBuilder.php';
include 'database/Messag.php';
include 'database/Post.php';
include 'function.php';


$posts = new Messag;

//$posts -> set_post();

$posts = $posts->getAll ();
//echo "ind 21";
//ddd($posts);
include 'view/index.view.php';



?>


