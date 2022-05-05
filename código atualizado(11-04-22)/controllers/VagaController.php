<?php
  class VagaController extends Controller {
    public function listar() {
      $model = new Vaga();
      $vagas = $model->read();
      $dados = array();
      $dados['vagas'] = $vagas;
      $this->view("listagemVaga", $dados);
    }

    public function novo() {
      $vaga = array();
      $vaga['id'] = 0;
      $vaga['curso'] = "";
      $vaga['turno'] = "";
      $vaga['descricao'] = "";
      $dados = array();
      $dados['vaga'] = $vaga;
      $this->view("formularioVaga", $dados);
    }


    public function editar($id) {
      $model = new Vaga();
      $vaga = $model->getById($id);
      $dados = array();
      $dados['vaga'] = $vaga;
      $this->view("formularioVaga", $dados);
    }


    public function excluir($id) {
      $model = new Vaga();
      $model->delete($id);
      $this->redirect("/vaga/listar");
      exit();
    }
    public function salvar() {
      $vaga = array();
      $vaga['id'] = $_POST['id'];
      $vaga['curso'] = $_POST['curso'];
      $vaga['turno'] = $_POST['turno'];
      $vaga['descricao'] = $_POST['descricao'];

      $model = new Vaga();
      if ($vaga['id']==0) {
        $model->create($vaga);
        $this->redirect("/vaga/listar");
      } else {
        $model->update($vaga);
        $this->redirect("/vaga/listar");
      }
    }

  }

 ?>
