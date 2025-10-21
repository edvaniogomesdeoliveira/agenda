<?php
$host = '127.0.0.1';
$user = 'root';
$pass = 'ego211272'; 
$db   = 'agenda';

$con = mysqli_connect($host, $user, $pass, $db);

if (!$con) {
  die('Falha na conexão: ' . mysqli_connect_error()); // Mostra erro se não conectar
}

// opcional: charset
mysqli_set_charset($con, 'utf8mb4');

?>