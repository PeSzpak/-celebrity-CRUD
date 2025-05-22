<?php

include('db.php');

$id = $_GET['id'];
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];

$query = "UPDATE `clients` SET `name` = '$name', `email` = '$email', `phone` = '$phone', `address` = '$address'
WHERE `id` = '$id';";

$result = mysqli_query($conn, $query);

if (!$result) {
    die("Query falhou.");
}

header("Location: index.php");