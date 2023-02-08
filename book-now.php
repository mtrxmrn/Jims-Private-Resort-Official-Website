<?php
session_start();
include 'header.php';
?>
<!DOCTYPE html>
<html lang="en">
 <link rel="stylesheet" href="styles.css"> 
<body>
  <div class="book-now-container">
  <div class="book-reservation"><h1>Make a Reservation</h1></div>
    <form action="" method="POST" class="book-form">
      <div class="book-text">E-Mail</div>
      <div class="book-text">Name</div>
      <div class="book-textbox-pos"><input type="text" name="email" placeholder="E-mail" class="book-textbox"></div>
      <div class="book-textbox-pos"><input type="text" name="name" placeholder="Name" class="book-textbox"></div>
      <div class="book-dropdown-pos"><select name="ModeOfPayment" id="" class="book-dropdown">
        <option value="Full">Full Payment</option>
        <option value="Half">Half Payment</option>
      </select></div>
      <div class="book-text">Date</div>
      <div class="book-text">Phone Number</div>
      <div class="book-textbox-pos"><input type="date" name="date" placeholder="Date" class="book-textbox"></div>
      <div class="book-textbox-pos"><input type="text" name="phnumber" placeholder="Phone No." class="book-textbox"></div>
      <div class="book-texts">Message(Optional)</div>
      <div class="book-textboxs-pos"><input type="text" name="name" placeholder="Name" class="book-textboxs"></div>
      <div class="book-btn-pos"><button type="submit" class="book-btn">Book!</button></div>
    </form>
  </div>
</body>
</html>