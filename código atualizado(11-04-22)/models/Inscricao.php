<?php
  class Incricao extends Model {
    protected $tabela="inscricao";
    protected $ordem="id";

    function inscricao($venda_id) {//id da vaga
      $sql = "SELECT item_venda.*, produto.descricao as produto_descricao FROM item_venda LEFT JOIN produto ON produto.id = item_venda.produto_id WHERE venda_id=:venda_id ORDER BY item_venda.id ";
//squl do relacionamento de vaga e aluno
      $sentenca = $this->conexao->prepare($sql);
      $sentenca->bindParam(":venda_id", $venda_id);
      $sentenca->execute();
      $sentenca->setFetchMode(PDO::FETCH_ASSOC);
      $dados = $sentenca->fetchAll();
      return $dados;
    }
  }
 ?>
