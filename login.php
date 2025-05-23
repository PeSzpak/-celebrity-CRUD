<?php

include('db.php');

$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';

$query = "SELECT * FROM `users` WHERE `email` = '$email'";
$result = mysqli_query($conn, $query);

$userData = mysqli_fetch_assoc($result);

$correctPassword = password_verify($password, $userData['password'] ?? '');

if ($correctPassword) {
    header("Location: /tasks_list.php");
    exit;
} else {
    header("Location: login_form.php?success=0");
    exit;
}
