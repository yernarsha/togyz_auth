<?php

  $connect = mysqli_connect('localhost', 'root', '', 'auth');
  if (!$connect) {
      die('Error DB connection');
  }
