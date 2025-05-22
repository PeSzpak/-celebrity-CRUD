<?php

include('db.php');

$id = $_GET['id'];  

$query = "DELETE FROM `clients` WHERE `id` = '$id';";

$result = mysqli_query($conn, $query);

if (!$result) {
    die("Query falhou.");
}

header("Location: index.php");