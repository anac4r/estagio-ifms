
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="estilo.css" />
    <title>Página inicial</title>
  </head>

  <?php
  $email = "";
  if (isset($_COOKIE["erro"])) {
    echo "<div class='p-3 mb-2 bg-danger text-white'>
      {$_COOKIE['erro']}
    </div>";
    if (isset($_COOKIE['email'])) {
      $email = $_COOKIE['email'];
    }
  }
 ?>
<div class="corpo">
  <div class="conteiner">
    <form class="" action="<?php echo APP; ?>/login/logar" method="post">
      <div class="col-4">
        <label for="FormControlSelect">Autenticar como:</label>
        <select class="form-control" id="exampleFormControlSelect" name = "nivel" value="<?php echo $nivel_desc; ?>">
          <option selected>Estudante</option>
          <option>Servidor</option>
          <option>Visitante</option>
        </select>
      </div>
  <div class="col-4">
        <label for="email">Email</label>
        <input type="email" name="email" id="email" class="form-control" value="<?php echo $email; ?>">
      </div>
      <div class="col-4">
        <label for="senha">Senha</label>
        <input type="password" name="senha" id="senha" class="form-control">
      </div><br/>
      <button type="submit" class="btn btn-success">Entrar</button>
      <a href="<?php echo APP; ?>/usuario/novo" class="btn btn-danger">Cadastrar-se</a>
    </form>
  </div>
  </div>
</html>
