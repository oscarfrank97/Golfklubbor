<?php
//if (isset($_POST['skapa konto'])) {
  $Email = $_POST['Email']
  $Username = $_POST['Username']
  $Password = $_POST['Password']

  $conn = new mysqli('localhost', 'root', 'root', 'golfgear')
  if ($conn->mysqli_connect_error) {
     die('Connection Failed : '.$conn->mysqli_connect_error);
  }else {
    $stmt = $conn->prepare("INSERT INTO register(Email, Username, Password)
            values(Email, Username, Password)");
    $stmt->execute();
    echo "Registrering lyckades";
    $stmt->close();
    $conn->close();
  }
//}
//
/*
if ((!empty($Email)) && (!empty($Username)) && (!empty($Password)) ) {
  $host = "localhost";
  $dbusername = "root";
  $dbpassword = "root";
  $dbname = "golfgear";
// Skapar anslutning till databasen
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
if (mysqli_connect_error()){
die('Connection Error (' . mysqli_connect_errno() .') '. mysqli_connect_error());
}
else{
  $sql = "INSERT INTO register (Email, Username, Password)
  values ('$Email', '$Username', '$Password')";
  if($conn->query($sql)){
    echo "Grattis du har nu skapat ett konto";
    else{
      echo "Error: ". $sql ."<br>". $conn->error;
    }
    $conn->close();
  }
}
//
}
 ?>
