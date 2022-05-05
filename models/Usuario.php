<?php
  class Usuario extends Model {
    protected $tabela="pessoa";
    protected $ordem="id";

    public function getByEmail($email) {
      $sql = "SELECT * FROM pessoa WHERE email = :email";
      $sentenca = $this->conexao->prepare($sql);
      $sentenca->bindParam(":email", $email);
      $sentenca->execute();
      $sentenca->setFetchMode(PDO::FETCH_ASSOC);
      $dados = $sentenca->fetch();
      return $dados;
    }
  }
 ?>
