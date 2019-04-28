<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);


include 'database/ConnectToDB.php';
include 'database/QueryBuilder.php';
include 'database/Messag.php';
include 'database/Post.php';
include 'function.php';


$posts = new Post;


$posts -> set_id();


$post = $posts->get_on_post();

include 'view/edit-form.view.php';


?>


