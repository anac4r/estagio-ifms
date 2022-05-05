<?php
class VagaAluno extends Model {
  protected $tabela="vagaAluno";
  protected $ordem="id";

  function inscricao($vagaAluno_id) {//id da vagaAluno
    $sql = "SELECT vagaAluno.*, aluno.cpf as idAluno FROM vagaAluno LEFT JOIN Aluno ON aluno.id = vagaAluno.idAluno WHERE id=:id ORDER BY vagaAluno.id ";
//squl do relacionamento de vaga e aluno
    $sentenca = $this->conexao->prepare($sql);
    $sentenca->bindParam(":id", $vagaAluno_id);
    $sentenca->execute();
    $sentenca->setFetchMode(PDO::FETCH_ASSOC);
    $dados = $sentenca->fetchAll();
    return $dados;
  }
}
 ?>