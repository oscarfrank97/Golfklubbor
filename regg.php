<?php

class MyDB extends SQLite3 {
  function __construct()
  {
    $this->open('golfgear.db');
  }
}

$db = new MyDB();
$sql = "INSERT INTO register (Email, Username, Password)
        VALUES ('demo@example.com', 'Dema Account', 'pass')";
$db->exec($sql);    



 ?>
