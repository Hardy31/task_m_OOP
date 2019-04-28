<?php
//session_start();

ini_set('display_errors', 1);
error_reporting(E_ALL);


include 'database/ConnectToDB.php';
include 'database/QueryBuilder.php';
include 'database/Messag.php';
include 'database/Post.php';
include 'function.php';


$new_post = new Post;

$new_post -> set_post();

$new_post->insert_post ();



 header('Location: index.php');
?>