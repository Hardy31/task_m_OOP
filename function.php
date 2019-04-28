<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

function dd($data){

    echo'<pre>';
    var_dump($data);
    echo'<pre>';
}
function ddd($data){
    echo'<pre>';
    print_r($data);
    echo'<pre>';
}

?>
