<?php
session_start();
require_once 'connection.php';

$login = $_POST['login'];
$password = md5($_POST['password']);

$check_user = mysqli_query($connect, "SELECT * from `users` WHERE `login` = '$login' 
                        AND `password` = '$password'");

if (mysqli_num_rows($check_user) > 0) {
    $user = mysqli_fetch_assoc($check_user);
    $_SESSION['user'] = [
        'id' => $user['id'],
        'login' => $user['login'],
        'email' => $user['email']
    ];
    header('Location: premium.php');

} else {
    $_SESSION['message'] = 'Wrong user!';
    header('Location: index.php');
}

