
<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <title>Cadastro de Vaga</title>
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
    <h1>Cadastro de vagas</h1>
    <form action="<?php echo APP; ?>/vaga/salvar" method="post">
      <div class="col-md-6">
       <label for="id" class="form-label">ID</label>
       <input readonly type="text" class="form-control" id="id" name="id" value='<?php echo "{$vaga['id']}"; ?>'>
     </div>

      <div class="col-md-6">
        <label for="descricao" class="form-label">Descrição de Vaga</label>
        <input type="text" class="form-control" id="descricao" name="descricao" value='<?php echo "{$vaga['descricao']}"; ?>'>
      </div>

      <div class="col-md-6">
    <label for="turno" class="form-label">Turno</label>
    <input type="text" class="form-control" id="turno" name="turno" value='<?php echo "{$vaga['turno']}"; ?>'>
      </div>

      <div class="form-group col-md-6">
    <label for="exampleFormControlSelect1">Curso</label>
    <select class="form-control" id="exampleFormControlSelect1" name = "curso" value= '<? echo "{$vaga['curso']}"; ?>'>
      <option selected>Escolher...</option>
      <option>Técnico integrado em informática</option>
      <option>Técnico integrado em eletrotécnica</option>
      <option>Técnico integrado em mecânica</option>
    </select>
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
