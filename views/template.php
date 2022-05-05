<?php
  if (!isset($_SESSION)) {
    session_start();
  }
  if (isset($_SESSION['id'])) {
    $id_usuario = $_SESSION['id'];
    $model = new Usuario();
    $usuarioLogado = $model->getById($id_usuario);
  } else {
    $usuarioLogado['email'] = "Não Logado";
    $usuarioLogado['id'] = 0;
    if ($arquivo != "views/login.php" &&
        $arquivo != "views/index.php") {
      header("location: ".APP."/login/login");
      exit(0);
    }
  }
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="estilo.css" />

</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #32A041; color: white; height: 100px;">

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo APP; ?>/vaga/listar">Home</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo APP; ?>/vaga/novo">Cadastrar Vagas</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo APP; ?>/aluno/listar">Listagem de Alunos</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo APP; ?>/aluno/novo">Cadastrar Alunos</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo APP; ?>/vaga/listar">Lista de alunos cadastrados</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo APP; ?>/login/logout">Sair</a>
      </li>
    </ul>
  </div>
</nav>
<p class="text-end">Bem vindo  <?php echo $usuarioLogado['nome'];  ?></p>
<div class="container-fluid">
    <?php
      if (isset($arquivo)) {
        require_once $arquivo;
      }
     ?>
</div>
<footer class="text-center text-white fixed-bottom" style="background-color: #32A041; height: 50px;">
© 2021
</footer>
</body>
