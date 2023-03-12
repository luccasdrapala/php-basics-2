<?php 

require '../../../bootstrap.php';

echo 'Hello World cadastrar !!!<br>';

// if(isEmpty()){
//     setFlash('message', 'Preencha todos os campos', 'danger');

//     header("location:/?page=create_user");
// } else {
//     setFlash('message', 'Os dados foram preenchidos corretamente', 'success');
    
//     header("location:/?page=create_user");
// }

$validate = validate([
    'name' => 's',
    'lastname' => 's',
    'email' => 'e',
    'password' => 's' 
]);

$cadastro = create('users', $validate); //recebe a tabela do banco e o objeto vindo do POST

dd($cadastro);

// if($cadastro){
    
//     setflash('message', 'Cadastrado com sucesso', 'success');

//     return redirect('create_user');
// }