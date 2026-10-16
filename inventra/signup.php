<?php

$username_notif = " ";
$passcode_notif = " ";
$email_notif = " ";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $register_username = trim($_POST['register_username'] ?? '');
    $register_passcode = $_POST['register_passcode'] ?? '';
    $email = $_POST['email'] ?? '';



    if (!preg_match("/^[A-Za-z .'-]{7,50}$/", $register_username)) {
        $username_notif = 'Name must be 7-50 letters.';
    } else {
        $username_notif = 'Username is valid';
    }

    if (! preg_match("/^[0-9]{5}$/D", $register_passcode)){
        $passcode_notif= 'Passcode must only be 5 numbers';
    }
    else{
        $passcode_notif= 'Passcode is  valid';
    }
   if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $email_notif= 'Invalid email address.';
} else {
    $email_notif= 'Email accepted';
}



}
?>








<!DOCTYPE html>
<html lang="eng">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="assets/signup_style.css">

</head>

<body>
    <div class="main">
        <div class="mainBg">
            <h1 id="title"> ADMIN SIGN UP </h1>

            <form action="signup.php" method="POST">
                <input type="text" name="register_username" placeholder="Enter a username" required>
                <span><?= $username_notif ?><br></span>
                <input type="password" name="register_passcode" placeholder="Enter a passcode" required>
                <span><?= $passcode_notif ?><br></span>
                <input type="text" name="email" placeholder="Enter your email" required><span><?= $email_notif ?><br></span>


                <button type="submit">CREATE ACCOUNT</button>
                <a href="index.php" class="signupButton"> Or Sign In</a>
            </form>
        </div>
    </div>


</body>

</html>