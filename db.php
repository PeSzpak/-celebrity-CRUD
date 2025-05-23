<?php

session_start();

// port 3306
$server = "localhost:3306";
$user = "root";
$pwd = "root";
$dbname = "clients_list";

$conn = mysqli_connect($server, $user, $pwd, $dbname);

if (!$conn) {
    echo "Erro ao conectar com banco de dados.";
}
