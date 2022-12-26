<?php
include_once "db.php";
if(isset($_REQUEST["username"], $_REQUEST["password"]))
{
    $username = $_REQUEST["username"];
    $password = $_REQUEST["password"];
    
    $sql = "INSERT INTO user (username, password) VALUES ('$username', '$password')";
    $conn->query($sql);
    header('location:index.html');
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta name="sign in" content="width=device-width,initial-scale=1.0">
        <title>sign in</title>
        <link rel="stylesheet" href="stylerege.css">
        <script src="https://kit.fontawesome.com/c42544e24a8.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="container">
            <form>
                <i class="fas fa-paper-plane"></i>
                <div class="input-group">
                    <label>user Name</label>
                    <input type="text" placeholder="Enter your name" id="contact-name" name="username" onkeyup="validateName()">
                    <span id="name-error"></span>
                </div>
                <div class="input-group">
                    <label>password</label>
                    <input type="text" placeholder="Enter your pass" id="contact-pass" name="password" onkeyup="">
                    <span id="name-error"></span>
                </div>
                <div class="input-group">
                    <label>phone No.</label>
                    <input type="tel" placeholder="123 456 78901" id="contact-phone" onkeyup="validatephone()">
                    <span id="phone-error"></span>
                </div>
                <div class="input-group">
                    <label>Email Id</label>
                    <input type="email" placeholder="Enter Email"id="contact-email" onkeyup="validateEmail()">
                    <span id="email-error"></span>
                </div>
                <button type="submit">sumbit</button>
                <span id="subit-error"></span>
            </form>
        </div>
        <script src="script.java"></script>
    </body>
</html>