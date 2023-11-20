<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="img/icons8-shark-64.png">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Devkiarie</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="https://fonts.cdnfonts.com/css/poppins" rel="stylesheet">
</head>
<body>
    <div id="preloader"></div>
    <header>
        <div class="navigation">
            <input type="checkbox" id="check">
            <label for="check" class="check_btn">
                <i class="fas fa-bars"></i>
            </label>
            <label class="logo">DEVKIARIE</label>
            <ul>
                <li><button class="btnlogin-popup">login</button></li>
            </ul>
            <h3>You are not logged in.</h3>
        </div>
        </header>
        <div class="cover_box">
            <span class="icon-close"><ion-icon name="close-outline"></ion-icon></span>
           
            
            <!--registration-->

            <div class="form-box register">
                <h2>Register</h2>
                <form method="post" action="includes/signup.inc.php"> 
                <div class="input-box">
                        <span class="icon"><ion-icon name="person-outline"></ion-icon></span>
                        <input type="text" name="name" required>
                        <label>Name</label>
                    </div>
                    <div class="input-box">
                        <span class="icon"><ion-icon name="person-outline"></ion-icon></span>
                        <input type="text" name="uid" required>
                        <label>Username</label>
                    </div>
                    <div class="input-box">
                        <span class="icon"><ion-icon name="mail-outline"></ion-icon></span>
                        <input type="email" name="email" required>
                        <label>Email</label>
                    </div>
                    <div class="input-box">
                        <span class="icon"><ion-icon name="lock-closed-outline"></ion-icon></span>
                        <input type="password" name="pwd" required>
                        <label>password</label>
                    </div>
                    <div class="input-box">
                        <span class="icon"><ion-icon name="lock-closed-outline"></ion-icon></span>
                        <input type="password" name="pwdrepeat" required>
                        <label>repeat password</label>
                    </div>
                    <div class="remember-forgot">
                        <label><input type="checkbox" >Agree to terms & conditions</label>
                        <a href="index.php">Forgot password ?</a>
                    </div>
                    <button type="submit" class="btn" name="submit">Register</button>
                    <div class="login-register">
                        <p>Aleady have an account ? <a href="#" class="login-link">login</a></p>
                    </div>
                </form>
                </div>

                <?php
    if(isset($_GET["error"])){
        if ($_GET["error"] == "emptyinput") {
            echo "<p>Fill in all fields</p>";
        } 
        else if($_GET["error"] == "invaliduid") {
            echo "<p>Choose a valid username!</p>";
        } 
        else if($_GET["error"] == "invalidemail") {
            echo "<p>Choose a valid email address</p>";
        }
        else if($_GET["error"] == "passwordsdontmatch") {
            echo "<p>Passwords do not match!</p>";
        }
        else if($_GET["error"] == "stmtfailed") {
            echo "<p>Something went wrong, try again!</p>";
        }
        else if($_GET["error"] == "usernametaken") {
            echo "<p>Username already exists!</p>";
        }
        else if($_GET["error"] == "none") {
            echo "<p>You have signed up!</p>";
        }
    }
    ?>

                 <!---Login -->

                <div class="form-box login">
                <h2>Login</h2>
                <form method="post" action="includes/login.inc.php">
                    <div class="input-box">
                        <span class="icon"><ion-icon name="person-outline"></ion-icon></span>
                        <input type="text" name="uid" required>
                        <label>Username / email.....</label>
                    </div>
                    <div class="input-box">
                        <span class="icon"><ion-icon name="lock-closed-outline"></ion-icon></span>
                        <input type="password" name="pwd" required>
                        <label>password</label>
                    </div>
                    <div class="remember-forgot">
                        <label><input type="checkbox" >Remember me</label>
                        <a href="#">Forgot password ?</a>
                    </div>
                    <button type="submit" class="btn" name="submit">Login</button>
                    <div class="login-register">
                        <p>Don't have an account ? <a href="#" class="register-link">Register</a></p>
                        </div>
                    </form>
                </div>
             </div>
        <div>

            <!---increase loader start-->
            <iframe style="display: none;" width="560" height="315" src="https://www.youtube.com/embed/VR1fY_w-nZo?si=9Pw4DMglHf9A11X_" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share?rel=0&autoplay=1" allowfullscreen></iframe>
            <iframe style="display: none;" width="560" height="315" src="https://www.youtube.com/embed/VR1fY_w-nZo?si=9Pw4DMglHf9A11X_" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share?rel=0&autoplay=1" allowfullscreen></iframe>
        </div>

    <script src="script.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    
    <script>
        var loader = document.getElementById("preloader");

        window.addEventListener("load", function(){
            loader.style.display = "none"
        })
    </script>



</body>
</html>