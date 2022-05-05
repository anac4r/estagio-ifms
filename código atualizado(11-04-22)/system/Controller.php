<?php
  abstract class Controller {
      protected $template = "template";
      protected $template1 = "template1";
    public function view($visao, $dados) {
      extract($dados);
      $arquivo = "views/$visao.php";
      require_once "views/$this->template.php";
    }
    public function view1($visao, $dados) {
      extract($dados);
      $arquivo = "views/$visao.php";
      require_once "views/$this->template1.php";
    }

    public function redirect($visao) {
      header('location: '.APP.$visao);
    }
  }
 ?>
