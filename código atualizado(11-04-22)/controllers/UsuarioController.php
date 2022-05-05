<?php
  class UsuarioController extends Controller {
      //salvar o nivel de acesso como estudante em todo Cadastro
    public function novo(){
      $usuario = array();
      $usuario['id'] = 0;
      $usuario['nome'] = "";
      $usuario['email'] = "";
      $usuario['cpf'] = "";
      $usuario['senha'] = "";
      $dados = array();
      $dados[''] = $usuario;
      $this->view1("formularioCadUsuario", $dados);
    }
    public function salvar() {
      $usuario = array();
      $usuario['nome'] = $_POST['nome'];
      $usuario['cpf'] = $_POST['cpf'];
      $usuario['email'] = $_POST['email'];
      $usuario['senha'] = $_POST['senha'];
      $usuario['nivel'] = 2;

      $model = new Usuario();
      $model->create($usuario);
      $this->redirect("/login/logar");
    }
  }
?>
