<?php
  include_once 'dbh.php';

  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $email = $_POST['email'];
  $user = $_POST['user'];
  $cellphone = $_POST['cellphone'];
  $pword = $_POST['pword'];

    $sql = "INSERT INTO user_account (First_Name, Last_Name, Email, User_names, Cell_Num, Pword, Administrator) VALUES ('$fname', '$lname', '$email', '$user', '$cellphone', '$pword', 0);";
    mysqli_query($conn, $sql);
   
      header("Location: ../index.php");
  
  