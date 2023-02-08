<?php
    include_once 'includes/dbh.php';
    include 'header.php';
?>
<!DOCTYPE html>
<html lang="en">
<body>

<!--formmm-->
<div id="background-login">
<div id="login-parent">

        <div id="section-2">
            <form action="includes/login-checker.php" method="POST">
                <h1 class="Login">Log-in</h1>
                <input type="text" name="user" size="35" class="sign usn" placeholder="UserName/Email"><br>
                <input type="password" name="pword" size="35" class="sign pass" placeholder="Password"><br>
                <button type="submit" name="submit" class="login-button">Login</button>
                <i class="fa-solid fa-right-to-bracket"></i>
                <hr class="line">
                <p class="or">OR</p>
                <button type="button" class="login facebook">Sign-in with FACEBOOK</button><br>
                <button type="button" class="login Gmail">Sign-in with GMAIL</button>
            </form>
        </div>
    </div>
</div>
<!--Form-->
<script src="script.js"></script>    
</body>
</html>