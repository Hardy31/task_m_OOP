<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);


include 'database/ConnectToDB.php';
include 'database/QueryBuilder.php';
include 'database/Messag.php';
include 'database/EditPost.php';
include 'function.php';


$edit_post = new EditPost;

$edit_post = $edit_post->update_post ();

header('Location: /index.php');


?>


