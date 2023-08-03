<?php
function get_data() {
    $fname = CONFIG['datafile'];

    if(!file_exists($fname)) {
        file_put_contents($fname, '');
    } else {
       $json = file_get_contents($fname);
    }

    return $json;
}

function get_detail_data($get){
    $detail = decode_data();

    foreach($detail as $data){
        if($data->company == $get){
            return $data;
        }
    }
    return false;
}

function decode_data(){
    $json = get_data();

    return json_decode($json);
}



function search_query1($get_search) {
    $array = decode_data();

    $search_array = array_filter($array, function($arr_parameter) use($get_search){
        if(strpos($arr_parameter->company, $get_search) !== false || strpos($arr_parameter->location, $get_search) !== false || strpos($arr_parameter->position, $get_search) !== false || strpos($arr_parameter->contract, $get_search) !== false){
            return $arr_parameter;
        }
    });

    return $search_array;
}




?>





