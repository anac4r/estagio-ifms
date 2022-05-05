<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="estilo.css" />
    <title>Cadastro</title>
</head>
<body>
  <div class="corpo">
  <div class="conteiner">
      <form  action="<?php echo APP; ?>/usuario/salvar" method="post">
        <div class="col-4">
          <label for="nome">Nome e sobrenome</label>
          <input type="text" name="nome" id="nome" class="form-control" >
        </div>
        <div class="col-4">
          <label for="cpf">CPF</label>
          <input type="cpf" name="cpf" id="cpf" class="form-control" >
        </div>
        <div class="col-4">
          <label for="email">Email</label>
          <input type="email" name="email" id="email" class="form-control" >
        </div>
        <div class="col-4">
          <label for="senha">Senha</label>
          <input type="password" name="senha" id="senha" class="form-control" >
        </div>
        <br/>
        <button type="submit" class="btn btn-success">Cadastrar</button>
        <a href="<?php echo APP; ?>/login/login" class="btn btn-danger">Cancelar</a>
      </form>
</div>
</div>
</body>
<footer></footer>
</html>
