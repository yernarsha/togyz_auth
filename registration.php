<?php
  session_start();

  if (isset($_SESSION['user'])) {
      header('Location: premium.php');
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Togyz Kumalak Registration</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body class="text-center">

<main class="form-signin w-100 m-auto">
    <form method="post" action="signup.php">
        <h1 class="h3 mb-3 fw-normal">Please register</h1>

        <div class="form-floating">
            <input type="text" name="login" class="form-control" id="floatingInput" placeholder="Enter your login">
            <label for="floatingInput">Login</label>
        </div>
        <div class="form-floating">
            <input type="email" name="email" class="form-control" id="floatingInput" placeholder="Enter your email">
            <label for="floatingInput">Email</label>
        </div>
        <div class="form-floating">
            <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Enter your password">
            <label for="floatingPassword">Password</label>
        </div>
        <div class="form-floating">
            <input type="password" name="password2" class="form-control" id="floatingPassword2" placeholder="Confirm your password">
            <label for="floatingPassword2">Confirm Password</label>
        </div>
        <button class="w-100 btn btn-lg btn-primary" type="submit">Register</button>
        <p>
            Have an account? <a href="index.php">Sign in!</a>
        </p>

        <?php
        if (isset($_SESSION['message'])) {
            echo '<p class="msg">' . $_SESSION['message'] . '</p>';
        }
        unset($_SESSION['message'])
        ?>

        <p class="mt-5 mb-3 text-muted">&copy; 2022 Yernar Shambayev, Togyz Kumalak World</p>
    </form>
</main>

</body>
</html>
