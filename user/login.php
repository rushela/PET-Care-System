<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/login.css">
</head>
<body>
    
    <div class="top">
        <center><h1>PET<span>.</span></h1></center>
    </div>

    <div class="login">

        <form class="login-form" method="POST" action="loginpath.php">
            <h1 class="l1">Login</h1>
            <?php if(isset($_GET['error']))
            {?> <p class="error"><?php echo $_GET['error']; ?></p>
            <?php } ?>
            <div class="input-group">
                <label for="email">Username</label>
                <input type="text" id="email" name="email" autocomplete="off">
            </div>
            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" autocomplete="off">
            </div>
            <button type="submit" name="submit">Login</button>
            <br>
            <div class="signup-link">
                <p>Don't have an account? <a href="signup.php">Sign Up</a></p>
            </div>
        </form>
    </div>
</body>
</html>
