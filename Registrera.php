<?php
if (isset($_POST['skapa konto'])) {
  $Email = $_POST['Email']
  $Username = $_POST['Username']
  $Password = $_POST['Password']

  $user = 'root';
  $password = 'root';
  $db = 'register';
  $host = 'localhost';
  $port = 8889;

  $link = mysqli_init();
  $success = mysqli_real_connect(
     $link,
     $host,
     $user,
     $password,
     $db,
     $port
  );

}

?>
