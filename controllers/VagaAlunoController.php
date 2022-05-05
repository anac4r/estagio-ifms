<?php
class VagaAlunoController extends Controller {
  public function listar() {
    $model = new Aluno();
    $alunos = $model->read();
    $dados = array();
    $dados['alunos'] = $alunos;
    $this->view("listagemAluno", $dados);
  }

  public function novo($id) {
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

  function inscritos($id) {
    $model = new Aluno();
    $aluno = $model->getById($id);
    $dados = array();
    $dados['aluno'] = $aluno;

    $modelVaga = new Vaga();
    $vagas = $modelVaga->read();
    $dados['vagas'] = $vagas;

    $modelInscricao = new VagaAluno();
    $itens = $modelInscricao->inscricao($aluno['id']);
    $dados['itens'] = $itens;

    $this->view("formularioVagaAluno", $dados);
  }


  function salvarInscricao() {
    $item = array();
    $item['id'] = 0;
    $item['idAluno'] = $_POST['idAluno'];
    $item['idVaga'] = $_POST['idVaga'];

    $modelVaga = new Vaga();
    $vaga = $modelVaga->getById($item['idVaga']);
    $item['curso'] = $vaga['curso'];
    $item['turno'] = $vaga['turno'];
    $item['descricao'] = $vaga['descricao'];


    $modelAluno = new Aluno();
    $aluno = $modelAluno->getById($item['idAluno']);
    $item['nome'] = $aluno['nome'];
    $item['email'] = $aluno['email'];
    $item['cpf'] = $aluno['cpf'];
    $item['curso'] = $aluno['curso'];
    $item['situacao'] = $aluno['situacao'];
    $item['ano_semestre_ingresso'] = $aluno['ano_semestre_ingresso'];
   


    $modelAluno->update($aluno);

    $modelInscricao = new VagaAluno();
    $modelInscricao->create($item) ;
    $this->redirect("aluno/itens/{$item['idAluno']}");
  }

  function excluirItem($id) {
    $modelInscricao = new VagaAluno();
    $item = $modelInscricao->getById($id);

    $modelAluno = new Aluno();
    $aluno = $modelAluno->getById($item['idAluno']);
    $modelAluno->update($aluno);

    $modelInscricao->delete($id);
    $this->redirect("aluno/itens/{$item['idAluno']}");
  }

}
?>
