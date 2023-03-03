<?php 

function dd($dump){
    
    var_dump($dump);
    die();
}

function getRequest() {

    $request = $_SERVER['REQUEST_METHOD'];
    
    if($request == 'POST'){
        
        return $_POST;
    }

    return $_GET;
}