<head>
    <link rel="stylesheet" href="style.css" type="text/css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/94190d6740.js" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jim's Private Resort</title>
</head>


<!--Logo , Navigation-->                               <!--section one start-->
 <div id="section">
 
 <!--register and login-->
 <?php
  if(isset($_SESSION['acc'])){
    echo '
    <div id="register">
      <ul id="register-ul">
        <li><a href="#">Hi ' . $_SESSION['acc']['User_Names'] . '!</a></li>
        <li><a href="includes/logout.php">Logout!</a></li>
      </ul>
    </div>
    ';
      
  }
  else{
    echo '
      <div id="register">
      <ul id="register-ul">
          <li><a href="Register.php">Register</a></li>
          <li><a href="Login.php">Login</a></li>
      </ul>
      </div>
      ';
  }
 ?>
        
 <!--register and login-->
 
 <!--jims logo-->
       <h1 class="jims-logo"><a href="index.php">Jims Private Resort</a></h1>
  <!--jims logo-->
  
  <!--navigation link-->
 <div id="navigation">
       <ul id="unordered-list">
           <li><a href="index.php">Home</a></li>
           <li><a href="Contact.php">Contacts</a></li>
           <?php
            if(isset($_SESSION['acc'])){
              if($_SESSION['acc']['Type'] == 1){
                echo '
                <li><a href="admin.php">Admin Tools</a></li>
                ';
              }
            }
           ?>
           <li><a href="book-now.php">Book Now!</a></li>
           <li><a href="#">About</a></li>
          
       </ul>
  </div>
  <!--navigation link-->
 </div>
