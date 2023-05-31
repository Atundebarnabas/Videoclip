<?php
$server = "localhost";
$servername = "root";
$serverpasscode = "";
$serverdatabse = "EcardExt";

$conn = mysqli_connect($server, $servername, $serverpasscode, $serverdatabse);

if($conn){
      // echo "Database CONNECTED ---Hurray 😁😁😁";
}
else {
      echo "Database not connected";
}
?>