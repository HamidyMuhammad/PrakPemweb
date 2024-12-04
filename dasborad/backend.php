<?php
  $host = 'localhost';
  $username = 'root';
  $password = '';
  $database = 'test';

  $error = '';
  $isError = false;

  $conn = new mysqli($host, $username, $password, $database);
  if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
  } 

  if(isset($_POST['name']) && $_POST['name'] !== '') {
    if(isset($_POST['password']) && $_POST['password'] !== '') {
      $error = '';
      $isError = false;
    } else {
      $error = 'Password belum diisi';
      $isError = true;
    }
  } else {
    $error = 'Email belum diisi';
    $isError = true;
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style-main.css">
  <title>Result</title>
</head>
<body>
  <?php if($isError): ?>
    <p><?= $error ?></p> 
  <?php endif; ?>
  <?php if($_POST['name']): ?>
    <p><?= $_POST['name'] ?></p>
  <?php endif ?>
</body>
</html>