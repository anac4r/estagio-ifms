<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <?php
  //  include "menu.php";
     ?>
    <title>Listagem de Alunos</title>
    <style media="screen">
    .corpo{
        padding: 2rem;
      }
      footer{
        background-color:  #c9a7c9;
        height: 50px;
        position: fixed;
        width: 100%;
        left: 0;
        bottom: 0;
      }
    </style>
  </head>
<body>
  <div class="corpo">

  <h1>Listagem de alunos</h1>

    <table class="table table-striped table-bordered">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Nome do Aluno</th>
          <th scope="col">Email</th>
          <th scope="col">CPF</th>
          <th scope="col">Curso</th>
          <th scope="col">Situação</th>
          <th scope="col">Ano e semestre de ingresso</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
      <?php
        $caminho = APP;
        foreach ($alunos as $aluno) {
          echo "
            <tr>
              <td>{$aluno['id']}</td>
              <td>{$aluno['nome']}</td>
              <td>{$aluno['email']}</td>
              <td>{$aluno['cpf']}</td>
              <td>{$aluno['curso']}</td>
              <td>{$aluno['situacao']}</td>
              <td>{$aluno['ano_semestre_ingresso']}</td>
              <td>
              <a class='btn btn-primary' href='$caminho/aluno/editar/{$aluno['id']}' role='button'>*</a>
              <a class='btn btn-danger' href='$caminho/aluno/excluir/{$aluno['id']}' role='button'>-</a>
              </td>
            </tr>";
        }
     ?>
      </tbody>
    </table>
    <a class="btn btn-success" href="novo" role="button">Cadastrar novo aluno</a>
  </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
  </body>
  <footer>
  </footer>
</html>
