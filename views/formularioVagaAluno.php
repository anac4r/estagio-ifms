
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

 
    <title>Cadastro de aluno</title>
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
    <br>
    <div class="corpo">
    <h1>Cadastro de alunos</h1>
    <form action="<?php echo APP; ?>/aluno/salvar" method="post">
      <div class="col-md-6">
       <label for="id" class="form-label">ID</label>
       <input readonly type="text" class="form-control" id="id" name="id" value='<?php echo "{$aluno['id']}"; ?>'>
     </div>

      <div class="col-md-6">
        <label for="nome" class="form-label">Nome completo</label>
        <input type="text" class="form-control" id="nome" name="nome" value='<?php echo "{$aluno['nome']}"; ?>'>
      </div>

      <div class="form-group col-md-6">
    <label for="email">email</label>
    <input type="text" class="form-control" id="email" name="email" value='<?php echo "{$aluno['email']}"; ?>'>
      </div>

      <div class="form-group col-md-6">
    <label for="cpf">CPF</label>
    <input type="text" class="form-control" id="cpf" name="cpf" value='<?php echo "{$aluno['cpf']}"; ?>'>
      </div>

      <div class="form-group col-md-6">
    <label for="exampleFormControlSelect1">Curso</label>
    <select class="form-control" id="exampleFormControlSelect1" name = "curso" value= '<? echo "{$aluno['curso']}"; ?>'>
      <option selected>Escolher...</option>
      <option>Técnico integrado em informática</option>
      <option>Técnico integrado em eletrotécnica</option>
      <option>Técnico integrado em mecânica</option>
    </select>
  </div>

      <div class="col-md-6">
        <label for="situacao" class="form-label">Situação</label>
        <input type="text" class="form-control" id="situacao" name="situacao" value='<?php echo "{$aluno['situacao']}"; ?>'>
      </div>

      <div class="col-md-6">
       <label for="ano_semestre_ingresso" class="form-label">Ano e Semestre de Ingresso</label>
       <input type="text" class="form-control" id="ano_semestre_ingresso" name="ano_semestre_ingresso" value='<?php echo "{$aluno['ano_semestre_ingresso']}"; ?>'>
     </div>
      <br>
      <button type="submit" class="btn btn-success">Salvar</button>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
  </div>
  </body>
  <footer>
  </footer>
</html>
