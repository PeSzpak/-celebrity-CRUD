<?php

include('db.php');

$name = $_POST['name'] ?? '';
$email = $_POST['email'] ?? '';
$phone = $_POST['phone'] ?? '';
$address = $_POST['address'] ?? '';

$query = "INSERT INTO `clients` (`name`, `email`, `phone`, `address`) 
            VALUES ('$name', '$email', '$phone', '$address')";

$result = mysqli_query($conn, $query);

if (!$result) {
    die("Query falhou.");
}

$_SESSION ['message'] = 'seccess client save!';
$_SESSION ['message-type'] = 'success';

header("Location: client_list.php");