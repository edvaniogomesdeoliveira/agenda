<?php
  require 'hearder.php';
  require 'conector.php';                            // Inclui o arquivo de conexão com o banco de dados
  $sql = "select * from eventos";                 // Cria uma string SQL que seleciona todos os registros da tabela 'alunos'
  $resultado = mysqli_query($con, $sql);  


?>

<h1>Todos os eventos</h1>

<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Assunto</th>
      <th scope="col">Descrissão</th>
      <!-- <th scope="col">Ações</th> -->
    </tr>
  </thead>
  <tbody>
  <?php
    // Início do loop que percorre todas as linhas retornadas da tabela 'eventos'
    while ($row = mysqli_fetch_assoc($resultado)) {  // Cada iteração pega uma linha da tabela como array associativo ($row)
        echo "<tr>";                                 // Cria uma nova linha na tabela HTML

        echo "<td>" . $row['id'] . "</td>";          // Célula com o ID
        echo "<td>" . $row['assunto'] . "</td>";     // Célula com o assunto
        echo "<td>" . $row['descrissao'] . "</td>";  // Célula com a descrição

        // Coluna com botões de ação
        echo "<td>
                <a class='btn btn-outline-danger' href='excluir.php?id=" . $row['id'] . "' role='button'>Excluir</a>
                <a class='btn btn-outline-success' href='editar.php?id=" . $row['id'] . "' role='button'>Editar</a>
              </td>";

        echo "</tr>";                                // Fecha a linha da tabela
    }
  ?>
</tbody>

</table>


<?php
require 'footer.php';
?>

