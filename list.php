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
        // Início do loop que percorre todas as linhas retornadas da tabela 'alunos'
        while($row=mysqli_fetch_assoc($resultado)){          // Cada iteração pega uma linha da tabela como array associativo ($row)
            echo "<tr>";                                    // Cria uma nova linha na tabela HTML

            echo "<td>".$row['id']."</td>";                 // Cria uma célula com o ID do aluno
            echo "<td>".$row['assunto']."</td>";               // Cria uma célula com o nome do aluno
            echo "<td>".$row['descrissao']."</td>";          // Cria uma célula com o número de matrícula

             echo "</tr>";                                   // Fecha a linha da tabela
        }
                 ?>           
    <tr>
      <td>
         <a class="btn btn-outline-danger" href="#" role="button">Excluir</a>
         <a class="btn btn-outline-success" href="editar.php" role="button">Editar</a>
      </td>
    </tr>
  </tbody>
</table>


<?php
require 'footer.php';
?>

