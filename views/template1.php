
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <title>Estágio</title>
    </head>
  <body>
  <header>
  </header>
      <style>
        header{
        background-color:#32A041;
        height: 100px;
        width: 100%;
        left: 0;
        bottom: 0;
        }
      </style>
      <div class="container-fluid" >
          <?php
            if (isset($arquivo)) {
              require_once $arquivo;
            }
           ?>
      </div>
    <footer class="text-center text-white fixed-bottom" style="background-color: #32A041; height: 50px;">
    © 2021
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
  </body>
</html>
