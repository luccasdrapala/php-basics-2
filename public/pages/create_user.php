<h2>Cadastrar Usuário</h2>

<?php getflash('message')?>

<form action="../pages/forms/form-create-user.php" method="post">

<div class="form-group">
    <label for="name">Nome</label>
    <input type="text" class="form-control" name="name">
</div>

<div class="form-group">
    <label for="lastname">Sobrenome</label>
    <input type="text" class="form-control" name="lastname">
</div>

<div class="form-group">
    <label for="email">Email</label>
    <input type="text" class="form-control" name="email">
</div>

<div class="form-group">
    <label for="password">Senha</label>
    <input type="password" class="form-control" name="password">
</div>

<button class="btn btn-success" type="submit">Submit</button>

</form>