<?php

require '../../../bootstrap.php';

echo 'Hello World cadastrar !!!<br>';

if(isEmpty()){
    setFlash('message', 'Preencha todos os campos', 'danger');

    header("location:/?page=contato");
} else {
    setFlash('message', 'Os dados foram preenchidos corretamente', 'success');
    
    header("location:/?page=contato");
}

// seto os tipos do validate, vao cair no swith por tipo de dado

$validate = validate([
    'name' => 's',
    'email' => 'e',
    'subject' => 's',
    'message' => 's' 
]);



?>