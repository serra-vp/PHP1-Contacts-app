<?php 
  $host = "localhost";
  $db_user = "root";
  $db_pass = "";
  $db = "php1_contacts";
  $database = new mysqli($host, $db_user, $db_pass, $db);
  if($database -> connect_errno){
    die("ERROR CONNECTING TO DATABASE. PLEASE TRY AGAIN LATER." . $database->connect_error);
  }
  session_start();
?>