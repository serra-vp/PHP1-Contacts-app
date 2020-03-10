<?php 
  include 'connection.php';
  unset($_SESSION['account_ID']);
	header('Location: ../../index.php');
?>