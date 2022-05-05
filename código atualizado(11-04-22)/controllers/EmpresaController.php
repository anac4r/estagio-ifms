<?php
  class EmpresaController extends Controller {
    public function listar() {
      $model = new Empresa();
      $empresas = $model->read();
      $dados = array();
      $dados['empresas'] = $empresas;
      $this->view("listagemEmpresa", $dados);
    }

    public function novo() {
      $empresa = array();
      $empresa['id'] = 0;
      $empresa['nome'] = "";
      $empresa['nome_representante'] = "";
      $empresa['telefone'] = "";
      $empresa['descricao_atv'] = "";
      $dados = array();
      $dados['empresa'] = $empresa;
      $this->view("formularioEmpresa", $dados);
    }


    public function editar($id) {
      $model = new Empresa();
      $empresa = $model->getById($id);
      $dados = array();
      $dados['empresa'] = $empresa;
      $this->view("formularioEmpresa", $dados);
    }


    public function excluir($id) {
      $model = new Empresa();
      $model->delete($id);
      $this->redirect("/empresa/listar");
      exit();
    }

    public function salvar() {
      $empresa = array();
      $empresa['id'] = $_POST['id'];
      $empresa['nome'] = $_POST['nome'];
      $empresa['nome_representante'] = $_POST['nome_representante'];
      $empresa['telefone'] = $_POST['telefone'];
      $empresa['descricao_atv'] = $_POST['descricao_atv'];

      $model = new Empresa();
      if ($empresa['id']==0) {
        $model->create($empresa);
        $this->redirect("/empresa/listar");
      } else {
        $model->update($empresa);
        $this->redirect("/empresa/listar");
      }

    }

  }

 ?>
