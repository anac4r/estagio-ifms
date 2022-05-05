
<?php
  class LoginController extends Controller{
    public function login() {
      $dados = array();
      if (!isset($_COOKIE['erro'])) {
        setcookie('email');
      }
      $this->view1("index", $dados);
    }
    public function logar() {

        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $nivel_descricao = $_POST['nivel_desc'];

        $model = new Usuario();
        $usuario = $model->getByEmail($email);
        if ($usuario == null) {
          setcookie("erro", "Email não encontrado, tente novamente !!!");
          setcookie("email", $email);
          $this->redirect("/login/login");
        } else {
            if ($senha != $usuario['senha'] ) {
              setcookie("erro", "Senha incorreta, tente novamente !!!");
              setcookie("email", $email);
              $this->redirect("/login/login");
            } else {
              setcookie("erro");
              if (!isset($_SESSION)) {
                session_start();
              }
              $_SESSION['id'] = $usuario['id'];
              $this->redirect("/vaga/listar");
            }
        }
    }

    public function logout() {
      if (!isset($_SESSION)) {
        session_start();
      }
      session_destroy();
      $this->redirect("/login/login");
    }
  }

 ?>
