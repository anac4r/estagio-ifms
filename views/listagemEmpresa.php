<h1>Empresas</h1>
<table class="table table-striped table-bordered">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Empresa</th>
      <th scope="col">Representante</th>
      <th scope="col">Telefone</th>
      <th scope="col">Atividades realizadas</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    <?php
        $caminho = APP;
        foreach ($empresas as $empresa) {
          echo "
            <tr>
              <td>{$empresa['id']}</td>
              <td>{$empresa['nome']}</td>
              <td>{$empresa['nome_representante']}</td>
              <td>{$empresa['telefone']}</td>
              <td>{$empresa['descricao_atv']}</td>
              <td>
              <a class='btn btn-primary' href='$caminho/empresa/editar/{$empresa['id']}' role='button'>*</a>
              <a class='btn btn-danger' href='$caminho/empresa/excluir/{$empresa['id']}' role='button'>-</a>
              </td>
            </tr>";
        }
     ?>
  </tbody>
</table>
