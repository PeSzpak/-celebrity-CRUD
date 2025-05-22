<?php

include('db.php');

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];

$query = "INSERT INTO `clients` (`name`, `email`, `phone`, `address`) 
            VALUES ('$name', '$email', '$phone', '$address')";

$result = mysqli_query($conn, $query);

if (!$result) {
    die("Query falhou.");
}

header("Location: index.php");