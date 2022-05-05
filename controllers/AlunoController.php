<?php
class AlunoController extends Controller {
  public function listar() {
    $model = new Aluno();
    $alunos = $model->read();
    $dados = array();
    $dados['alunos'] = $alunos;
    $this->view("listagemAluno", $dados);
  }

  public function novo() {
    $aluno = array();
    $aluno['id'] = 0;
    $aluno['nome'] = "";
    $aluno['email'] = "";
    $aluno['cpf'] = "";
    $aluno['curso'] = "";
    $aluno['situacao'] = "";
    $aluno['ano_semestre_ingresso'] = "";
    $dados = array();
    $dados['aluno'] = $aluno;
    $this->view("formularioAluno", $dados);
  }


  public function salvar() {
    $aluno = array();
    $aluno['id'] = $_POST['id'];
    $aluno['nome'] = $_POST['nome'];
    $aluno['email'] = $_POST['email'];
    $aluno['cpf'] = $_POST['cpf'];
    $aluno['curso'] = $_POST['curso'];
    $aluno['situacao'] = $_POST['situacao'];
    $aluno['ano_semestre_ingresso'] = $_POST['ano_semestre_ingresso'];


    $model = new Aluno();
    if ($aluno['id']==0) {
      $model->create($aluno);
    } else {
      $model->update($aluno);
    }
    $this->redirect("/aluno/listar");
  }


  public function editar($id) {
    $model = new Aluno();
    $aluno = $model->getById($id);
    $dados = array();
    $dados['aluno'] = $aluno;
    $this->view("formularioAluno", $dados);
  }


  public function excluir($id) {
    $model = new Aluno();
    $model->delete($id);
    $this->redirect("/aluno/listar");
    exit();

  }
}
?>
