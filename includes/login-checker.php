<?php
include_once 'dbh.php';
session_start();

$user = $_POST['user'];
$pword = $_POST['pword'];

$sqluser = mysqli_query($conn, "SELECT * FROM user_account WHERE User_Names = '$user'");
$sqllogin = mysqli_query($conn, "SELECT * FROM user_account WHERE User_Names = '$user' && Pword = '$pword'");



  if($user == null){
    header("Location: ../Login.php");
  }  
  if(mysqli_num_rows($sqluser) > 0 == false){
      echo "user does not exist";
  }
  if(mysqli_num_rows($sqllogin) > 0 == true){
      $_SESSION['acc'] = mysqli_fetch_assoc($sqllogin);
      
      header("Location: ../index.php");
    }
  if(mysqli_num_rows($sqluser) > 0 == true){
    if(mysqli_num_rows($sqllogin) > 0 == false){
      echo "Password does not match";
    }
  }
  