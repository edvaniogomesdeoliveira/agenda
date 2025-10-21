<?php
require 'conector.php'; // Conexão com o banco

// Verifica se o ID foi enviado pela URL
if (isset($_GET['id'])) {
    $id = intval($_GET['id']); // Converte para inteiro por segurança

    // Monta o SQL de exclusão
    $sql = "DELETE FROM eventos WHERE id = $id";

    // Executa o SQL
    if (mysqli_query($con, $sql)) {
        echo "<script>
                alert('Evento excluído com sucesso!');
                window.location.href = 'list.php'; // Redireciona para a lista de eventos
              </script>";
    } else {
        echo "<script>
                alert('Erro ao excluir o evento: " . mysqli_error($con) . "');
                window.location.href = 'list.php';
              </script>";
    }

} else {
    // Se não tiver ID na URL
    echo "<script>
            alert('ID do evento não informado.');
            window.location.href = 'list.php';
          </script>";
}

// Fecha a conexão
mysqli_close($con);
?>
