<?php
    include_once 'includes/dbh.php';
    include 'header.php';
?>

<!DOCTYPE html>
<html lang="en">
<body>
    <!--Database-->
    <?php
        $sql = "SELECT * FROM user_account;";
        $result = mysqli_query($conn, $sql);
       
    ?>
    <!--Database-->
        <div id="parent-register">        
        <div id="login-parent">
            <div id="section-2">
                <form action="includes/signup-process.php" method="POST">
                    <h1 id="Sign-in">Sign-up</h1>
                    <input type="email" name="email" size="35" class="sign usn" placeholder="E-mail"><br>
                    <input type="text" name="user" size="35" class="sign username" placeholder="Username"><br>
                    <input type="text" name="fname" size="35" class="sign fname" placeholder="First Name"><br>
                    <input type="text" name="lname" size="35" class="sign lname" placeholder="Last Name"><br>
                    <input type="text" name="cellphone" size="35" class="sign contact" placeholder="Cellphone No."><br>
                    <input type="password" name="pword" size="35" class="sign pass" placeholder="Password"><br>
                    <button type="submit" name="submit" class="login-button">Sign-up</button>
                    <!--<p class="agree"><input type="checkbox" required >agree to the term agreement</p>-->
                    <hr class="line">
                    <p class="or">OR</p>
                    <button type="button" class="sign-in-with-fb">Sign-in with FACEBOOK</button><br>
                    <button type="button" class="sign-in-with-gmail">Sign-in with GMAIL</button>
                </form>
            </div>
        </div>

    </div>
<script src="script.js"></script>    
</body>
</html>