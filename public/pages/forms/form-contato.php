<?php

require '../../../bootstrap.php';

echo 'Hello World cadastrar !!!<br>';

// seto os tipos do validae, vao cair no swith por tipo de dado

//dd($_POST);
$validate = validate([
    'name' => 's',
    'email' => 'e',
    'subject' => 's',
    'message' => 's' 
]);

dd($validate);

?>