<?php

include('db.php');

$id = $_GET['id'];  

$query = "DELETE FROM `clients` WHERE `id` = '$id';";

$result = mysqli_query($conn, $query);

if (!$result) {
    die("Query falhou.");
}

$_SESSION['message'] = 'client remove success.';
$_SESSION['message-type'] = 'danger';

header("Location: client_list.php");

