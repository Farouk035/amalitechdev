<?php
require('app/app.php');

if(!isset($_GET['company'])){
    redirect('index.php');
}

$data = get_detail_data($_GET['company']);

if($data == false){
    view('not_found'); 
    redirect('not_found.view.php');
    die();
}

$title="$data->company";

view('details', $data);

?> 
