<?php
require('app/app.php');

$title='Devjobs-Home';

$query = decode_data();

if ($_SERVER['REQUEST_METHOD'] == "GET") {
        foreach($_GET as $key => $value) {
                $query = search_query1($_GET[$key]); 
              
        }
    }

view('index', $query);
?> 





        

