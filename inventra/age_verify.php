<?php
$notif = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $age = filter_var($_POST['age'] ?? '', FILTER_VALIDATE_INT,
        ['options' => ['min_range' => 1, 'max_range' => 120]]);

    if ($age === false) {
        $notif = 'Age must be a whole number between 1 and 120.';
    } elseif ($age < 18) {
        $notif = 'You must be 18 or older to continue.';
    } else {
        $_SESSION['age_verified'] = true;
        $notif = '<a href="signup.php" class="signupButton">Continue to Signup</a>';
    }
}
?>



    <!DOCTYPE html>
    <html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="assets/age_verify_style.css">
    
</head>
    <body>
        <div class="main">
    
            <div class="mainBg">
                <h1>BEFORE WE PROCEED</h1>
    <form action="age_verify.php" method="POST">
        <input type="text" name="age" placeholder="Enter your age" required>
        <br>
        <button type="submit">VERIFY</button><br>
    </form>
    <?= $notif ?>
</div>
    </div>
    </body>
    </html>




