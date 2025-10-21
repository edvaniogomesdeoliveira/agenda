<?php

require 'conector.php';

$assunto = $_POST['assunto'];
$descrissao = $_POST['descrissao'];

$sql = "INSERT INTO eventos (assunto, descrissao) VALUES ('$assunto', '$descrissao')";

if (mysqli_query($con, $sql)) {
    echo 'Novo registro criado com sucesso';
} else {
    echo 'Erro: ' . $sql . '<br>' . mysqli_error($con);
}

mysqli_close($con);

header('Location: list.php');
exit;
?>