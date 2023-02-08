<?php
    session_start();
    include_once 'includes/dbh.php';
    include 'header.php';
    if(isset($_POST['tagalogout'])){
        session_destroy();
      }
   
?>

<!DOCTYPE html>
<html lang="en">
<body>
<form action="index.php" method="POST">
    <button name="tagalogout">Logout</button>
  </form>

<!--Logo , Navigation-->                           <!--section one end-->

<!--rental-->
<!--rental header-->
<div id="Rental-view">
    <h1 class="Rental-header">Rental </h1>
    <p  class="Rental-smallheader">cottage, rooms , pools</p>
</div>
<!--rental header-->

<!--rental cottage ,room, pool-->
<div class="Rental-desc">

<div class="Rental-option">
    <h2 class="Cotttage-header">Cottage</h2>
    <p class="cottage-desc">Lorem ipsum dolor sit, amet consectetur</p>
</div>


<div class="Rental-option">
    <h2 class="Room-header">Room</h2>
    <p class="Room-desc">Lorem ipsum dolor sit, amet consectetur</p>
</div>

<div class="Rental-option">
    <h2 class="Pool-header">Pool</h2>
    <p class="Pool-desc">Lorem ipsum dolor sit, amet consectetur</p>
</div>

</div>
<!--rental cottage ,room, pool-->
<!--rental-->

<!--LOCAL CAMPUS-->
<div id="local-header">
<h1 class="local-title">Local place</h1>
<p class="local-heder-desc">Lorem ipsum dolor sit amet consectetur </p>
</div>

<div id="local-campus">
    <img class="local-image" src="img/campus.jpg">
    <div class="overlay">
        <h1 class="local-desc">Nueva Ecija</h1>
    </div>
</div>
<!--LOCAL CAMPUS-->

<!--Picture of the Facilities-->
<div id="Picture">
    <h1 class="Picture-header">Picture of the facilities</h1>
    <p class="picture-desc">Lorem ipsum dolor sit amet consectetur</p>

    <div id="picture-image">
        <div class="images">
        <img class="images-picture" src="img/picture-one.jpg">
        <h3 class="image-header">loren legarda</h3>
        <p class="image-desc">Lorem ipsum dolor sit amet consectetur </p> 
    </div>  

    <div class="images">
        <img class="images-picture" src="img/picture-two.jpg">
        <h3 class="image-header">loren legarda</h3>
        <p class="image-desc">Lorem ipsum dolor sit amet consectetur </p> 
    </div>

    <div class="images">
        <img class="images-picture" src="img/picture-three.jpg">
        <h3 class="image-header">loren legarda</h3>
        <p class="image-desc">Lorem ipsum dolor sit amet consectetur </p> 
    </div>
</div>
</div>
<!--Picture of the Facilities-->

<div id="About">
    <h2 class="About-header">About Us</h2>
    <p class="About-desc">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Maxime quasi 
blanditiis sapiente tempore<br></p>
</div>

<div id="icon">

    <div class="icons one">
        <i class="fa-brands fa-facebook"></i>
    </div>
<div class="icons two">
    <i class="fa-brands fa-twitter"></i>
</div>

<div class="icons three">
    <i class="fa-brands fa-instagram"></i>
</div>

</div>

<script src="script.js"></script>    
</body>
</html>