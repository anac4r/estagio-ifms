<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <title>Listagem de Vagas</title>
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

  <h1>Listagem de Vagas</h1>
      <?php
      $caminho = APP;
      foreach ($vagas as $vaga) {
        echo"
        <div class= 'container'>
            <div class='col-md-5'>
            <div class='card'>
              <div class='card-body'>
                <h5 class='card-title'>{$vaga['curso']}</h5>
                <p class='card-text'>Descrição da vaga.</p>
                <a class='btn btn-primary' href='$caminho/vaga/editar/{$vaga['id']}' role='button'>Editar</a>
              <!-- Modal -->
              <div class='modal fade' id='Modal' tabindex='-1' role='dialog' aria-labelledby='TituloModalCentralizado' aria-hidden='true'>
                <div class='modal-dialog modal-dialog-centered' role='document'>
                  <div class='modal-content'>
                    <div class='modal-header'>
                      <h5 class='modal-title' id='TituloModalCentralizado'>Título do modal</h5>
                      <button type='button' class='close' data-dismiss='modal' aria-label='Fechar'>
                        <span aria-hidden='true'>&times;</span>
                      </button>
                    </div>
                    <div class='modal-body'>
                      ...
                    </div>
                    <div class='modal-footer'>
                      <button type='button' class='btn btn-secondary' data-dismiss='modal'>Fechar</button>
                      <button type='button' class='btn btn-primary' href='$caminho/vaga/excluir/{$vaga['id']}'>Salvar mudanças</button>
                    </div>
                  </div>
                </div>
              </div>
            <!-- Botão para acionar modal -->
            <button type='button' class='btn btn-danger' data-toggle='modal' data-target='#Modal'>
            Excluir
            </button>
                </div>
              </div>
            </div>
            </div>
            <br>";
          }
     ?>
    <a class="btn btn-success" href="novo" role="button">Cadastrar nova Vaga</a>
  </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
  </body>
  <footer>
  </footer>
</html>
