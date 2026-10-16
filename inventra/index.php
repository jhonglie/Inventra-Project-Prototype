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
                <h1>ADMIN LOGIN</h1>
    <form action="index.php" method="POST">
        <input type="text" name="username" placeholder="Enter your username" required>
        <br>
        <input type="password" name="passcode" placeholder="Enter your passcode" required>
        <br>
        <button type="submit">LOGIN</button><br>
<a href= "signup.php" class="signupButton"> Or Signup</a>  
    </form>
    <?= $notif ?>
</div>
    </div>
    </body>
    </html>




