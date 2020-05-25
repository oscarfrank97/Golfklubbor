<?php
//create connectiom
$connection = new SQLite3("./db/GolfGear.db");
 //Test connection
 if($connection){
   echo "Vi är anslutna till databasen";
 }

?>
