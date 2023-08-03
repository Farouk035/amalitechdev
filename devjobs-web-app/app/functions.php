<?php
function view($url, $model=""){
    global $title;
    require('./views/layout.view.php');
}

function output($value){
    echo '<pre>';
    print_r($value);
    echo '</pre>';
}

function redirect($url){
    header("Location: $url");
    die();
}

?>