<?php

include('db.php');

$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';

$hash = password_hash($password, PASSWORD_ARGON2ID);

$query = "INSERT INTO `users`(`email`,`password`) VALUES('$email', '$hash')";
$result = mysqli_query($conn, $query);

if ($result) {
    header("Location: login_form.php");
    exit;
}
