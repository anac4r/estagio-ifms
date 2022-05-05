<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">


    <title>cadastro de empresas</title>
  </head>
  <body>
    <br>
    <div class="corpo">
    <h1>Cadastro de empresas</h1>
    <form action="<?php echo APP; ?>/empresa/salvar" method="post">
      <div class="col-md-6">
       <label for="id" class="form-label">ID</label>
       <input readonly type="text" class="form-control" id="id" name="id" value='<?php echo "{$empresa['id']}"; ?>'>
     </div>

      <div class="col-md-6">
        <label for="nome" class="form-label">Empresa</label>
        <input type="text" class="form-control" id="nome" name="nome" value='<?php echo "{$empresa['nome']}"; ?>'>
      </div>
      <div class="col-md-6">
        <label for="nome_representante" class="form-label">Nome do representante</label>
        <input type="text" class="form-control" id="nome_representante" name="nome_representante" value='<?php echo "{$empresa['nome_representante']}"; ?>'>
      </div>

      <div class="col-md-6">
        <label for="telefone" class="form-label">Telefone</label>
        <input type="text" class="form-control" id="telefone" name="telefone" value='<?php echo "{$empresa['telefone']}"; ?>'>
      </div>


      <div class="col-md-6">
        <label for="descricao_atv" class="form-label">Descrição das atividades</label>
        <input type="text" class="form-control" id="descricao_atv" name="descricao_atv" value='<?php echo "{$empresa['descricao_atv']}"; ?>'>
      </div><br>
      <button type="submit" class="btn btn-success">Salvar</button>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
  </div>
  </body>
  <footer>
  </footer>
</html>
