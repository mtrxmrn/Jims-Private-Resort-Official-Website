<?php
  session_start();
  echo $_SESSION['user'];
  if(isset($_POST['tagalogout'])){
    session_destroy();
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="session.php" method="POST">
    <button name="tagalogout">Logout</button>
  </form>
</body>
</html>