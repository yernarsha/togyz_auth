<?php
  session_start();

  if (!isset($_SESSION['user'])) {
    header('Location: index.php');
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Togyz Kumalak World</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body class="text-center">

<main class="form-signin w-100 m-auto">
    <form method="post" action="signin.php">
        <img class="mb-4" src="img/header.jpg" alt="" width="200">
        <h1 class="h3 mb-3 fw-normal">Welcome to the Togyz Kumalak World, <?= $_SESSION['user']['login']; ?>!</h1>

        <div class="form-floating">
            <a href="https://steveking.ru/soc5/" target="_blank">Modern Togyz</a><br>
            <a href="https://steveking.ru/soc4/" target="_blank">Togyz Kumalak Quiz</a><br>
            <a href="https://steveking.ru/soc6/" target="_blank">Togyz Blog</a>
        </div><br><br>

        <a href="signout.php">Log out</a>

        <p class="mt-5 mb-3 text-muted">&copy; 2022 Yernar Shambayev, Togyz Kumalak World</p>
    </form>
</main>

</body>
</html>
