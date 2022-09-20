<?php
session_start();
require_once 'connection.php';

$login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
$email = filter_var(trim($_POST['email']), FILTER_SANITIZE_STRING);
$password = filter_var(trim($_POST['password']), FILTER_SANITIZE_STRING);
$password2 = filter_var(trim($_POST['password2']), FILTER_SANITIZE_STRING);

if (mb_strlen($login) < 5 || mb_strlen($login) > 50) {
    $_SESSION['message'] = 'Incorrect login length';
    header('Location: registration.php');
} else if (mb_strlen($password) < 6) {
    $_SESSION['message'] = 'Incorrect password length';
    header('Location: registration.php');
} else if ($password !== $password2) {
    $_SESSION['message'] = 'Passwords do not match';
    header('Location: registration.php');
} else {
    $password = md5($password);

    mysqli_query($connect, "INSERT into `users` (`login`, `email`, `password`) VALUES (
            '$login', '$email', '$password')");
    $_SESSION['message'] = 'Successful!';
    header('Location: index.php');
}
