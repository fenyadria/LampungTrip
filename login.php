<?php
session_start();

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if ($email === 'admin@gmail.com' && $password === '123456') {
        $_SESSION['login'] = true;
        $_SESSION['role'] = 'admin';

        header('Location: admin.php');
        exit;
    }

    else if (
        isset($_SESSION['user_email']) &&
        $email == $_SESSION['user_email'] &&
        $password == $_SESSION['user_password']
    ) {
        $_SESSION['login'] = true;
        $_SESSION['role'] = 'user';

        header('Location: user.php');
        exit;
    }

    else {
        echo "Invalid email or password.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link rel="stylesheet" href="global.css">
    <link rel="stylesheet" href="login.css">

</head>
<body>

<div class="container">
    <div class="left-side">
    <h1>LAMPUNG TRIP</h1>
    <h3>Discover the beauty of 
        Lampung with ease.</h3>
    <p>
        Explore amazing destinations, find 
        travel information, and join 
        exciting open trips 
        for unforgettable experiences.
    </p>
    </div>

    <div class="login-box">
        <?php
        if (isset($error)) { ?>
            <p class="error"><?php echo $error; ?></p>
        <?php } ?>

        <form method="POST">
            <label>Email</label>
            <input type="email" name="email" placeholder="Enter your email" required>
            <label>Password</label>
            <input type="password" name="password" placeholder="Enter your password" required>
            
            <a href="#" class="forgot-password">Forgot Password?</a>

            <button type="submit" name="login">SIGN IN</button>

            <div class="divider">or</div>

            <p class="google">Sign in with Google</p>
            <p class="SignUp">Are you new? <a href=#>Create an Account</a></p>
        </form>
    </div>
    
</div>
</body>
</html>