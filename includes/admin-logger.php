<?php
include 'dbh.php';
$sqlall = mysqli_query($conn, "SELECT * FROM user_account OR administrator");
  echo $sqlall['date_of_payment'];
  echo $sqlall['First_Name'];
?>