<?= getFlash('message') ?>

<h2>Contato</h2>

<form action="../pages/forms/form-contato.php" method="post">
    
    <div class="form-group">
        <label for="name">Nome</label>
        <input class="form-control" id="name" name="name" type="text">
    </div>
    <br>
    
    <div class="form-group">
        <label for="email">Email</label>
        <input class="form-control" id="email" name="email" type="email">
    </div>
    <br>

    <div class="form-group">
        <label for="subject">Assunto</label>
        <input class="form-control" id="subject" name="subject" type="text">
    </div>
    <br>

    <div class="form-group">
        <label for="message">Mensagem</label>
        <textarea class="form-control" name="message" id="message" cols="30" rows="5" placeholder="Digite sua mensagem"></textarea>
    </div>
    <br>

    <button class="btn btn-success" type="submit">Submit</button>

</form>