    <?php

    $stored_username = 'Avram Dansal';
    $stored_passcode = 'dansal123';
    $notif='';

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $username = trim($_POST['username'] ?? '');
        $password = $_POST['passcode'] ?? '';

        if ($username === $stored_username && $password === $stored_passcode) {
        $notif = '<p style="color:green;">Login successful! Welcome, '. $stored_username .'</p>';
        } else {
            $notif = '<p style="color:red;">Invalid username or password.</p>';
        }
    }
    ?>






    <!DOCTYPE html>
    <html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="assets/index_style.css">
    
</head>
    <body>
        <div class="main">
        
            <div class="mainBg">
                <img src="assets/images/signin_art.webp" class="signin_art">
                <div class="panel">

<a href= "credits.html" class="signupButton"><svg class="info_icon" width="7" height="18" viewBox="0 0 7 18" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M1.6636 1.62857C1.6636 0.729464 2.40875 0 3.3272 0C4.24564 0 4.99079 0.729464 4.99079 1.62857C4.99079 2.52768 4.24564 3.25714 3.3272 3.25714C2.40875 3.25714 1.6636 2.52768 1.6636 1.62857ZM0 6.51429C0 5.91375 0.495613 5.42857 1.10907 5.42857H3.3272C3.94065 5.42857 4.43626 5.91375 4.43626 6.51429V15.2H5.54533C6.15878 15.2 6.65439 15.6852 6.65439 16.2857C6.65439 16.8863 6.15878 17.3714 5.54533 17.3714H1.10907C0.495613 17.3714 0 16.8863 0 16.2857C0 15.6852 0.495613 15.2 1.10907 15.2H2.21813V7.6H1.10907C0.495613 7.6 0 7.11482 0 6.51429Z" fill="white"/>
</svg></a>
             <h1>ADMIN LOGIN</h1>

    <form action="index.php" method="POST">
        <input type="text" name="username" placeholder="Enter your username" required>
        <br>
        <input type="password" name="passcode" placeholder="Enter your passcode" required>
        <p class="forgotpass">Forgot Passcode?</p>
        <button type="submit">LOGIN</button><br>

<a href= "signup.php" class="signupButton"> Or Signup</a>  
    </form>
    <?= $notif ?>
    </div>
</div>
    </div>
    </body>
    </html>




