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
<img src="assets/images/signin_art.webp" class="signin_art">

        <div class="panel">
           <a href= "credits.html" class="signupButton"><svg class="info_icon" width="7" height="18" viewBox="0 0 7 18" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M1.6636 1.62857C1.6636 0.729464 2.40875 0 3.3272 0C4.24564 0 4.99079 0.729464 4.99079 1.62857C4.99079 2.52768 4.24564 3.25714 3.3272 3.25714C2.40875 3.25714 1.6636 2.52768 1.6636 1.62857ZM0 6.51429C0 5.91375 0.495613 5.42857 1.10907 5.42857H3.3272C3.94065 5.42857 4.43626 5.91375 4.43626 6.51429V15.2H5.54533C6.15878 15.2 6.65439 15.6852 6.65439 16.2857C6.65439 16.8863 6.15878 17.3714 5.54533 17.3714H1.10907C0.495613 17.3714 0 16.8863 0 16.2857C0 15.6852 0.495613 15.2 1.10907 15.2H2.21813V7.6H1.10907C0.495613 7.6 0 7.11482 0 6.51429Z" fill="white"/>
</svg></a>
            <h1 id="title"> ADMIN SIGN UP </h1>

            <form action="signup.php" method="POST">
                <input type="text" name="register_username" placeholder="Enter a username" required>
                <span class="notif"><?= $username_notif ?><br></span>
                <input type="password" name="register_passcode" placeholder="Enter a passcode" required>
                <span class="notif"><?= $passcode_notif ?><br></span>
                <input type="text" name="email" placeholder="Enter your email" required><span class="notif"><?= $email_notif ?><br></span>


                <button type="submit">CREATE ACCOUNT</button><br>
                <a href="index.php" class="signupButton"> Or Sign In</a>
            </form>
            </div>
        </div>
    </div>


</body>

</html>