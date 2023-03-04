<?php

require '../../../bootstrap.php';

echo 'Hello World cadastrar !!!<br>';

if(isEmpty()){
    
}

// seto os tipos do validae, vao cair no swith por tipo de dado

$validate = validate([
    'name' => 's',
    'email' => 'e',
    'subject' => 's',
    'message' => 's' 
]);

?>