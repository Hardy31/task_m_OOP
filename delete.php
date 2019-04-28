<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);


include 'database/ConnectToDB.php';
include 'database/QueryBuilder.php';
include 'database/Messag.php';
include 'database/Post.php';
include 'function.php';


$del_post = new Post;
ddd($del_post);
var_dump($_GET);
$del_post -> set_id();
ddd($del_post);

$del_post = $del_post ->del_on_post();


echo "ind 21";
dd($del_post );

header('Location: index.php');




































?>


