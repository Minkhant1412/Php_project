<?php
    session_start();
    $login = isset($_SESSION['login']);
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <style>
        .wrap { width: 500px;}
    </style>
</head>
<body>
    <div class="container wrap mt-5">
    <?php if(isset($_GET['incorrect'])): ?>
        <div class="alerl alerl-warning text-danger">Incorrect Email or password</div>
    <?php endif ?>
    <?php if($login): ?>
    <h1 class="text-secondary">Home </h1>
    <p class="text-secondary">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quae molestiae quis illum maiores nulla cum libero quasi, fugit tenetur minima, delectus inventore sit hic sint placeat aspernatur amet quia reprehenderit.</p>
    <a href="_actions/logout.php">Logout</a>
<?php else: ?>
    <section>
        <div class="color"></div>
        <div class="color"></div>
        <div class="color"></div>
        <div class="box">
            <div class="square" style="--i:0;"></div>
            <div class="square" style="--i:1"></div>
            <div class="square" style="--i:2"></div>
            <div class="square" style="--i:3"></div>
            <div class="square" style="--i:4"></div>
            <div class="container2">
                <div class="form">
                    <h1>Login</h1>
                    <?php if (isset($_GET['registered'])): ?>
                        <div class="alert alert-success">Account created. Please login.
                        </div>
                    <?php endif ?>

                    <?php if (isset($_GET['suspended'])): ?>
                        <div class="alert alert-danger">Your account is suspended</div>
                    <?php endif ?>
                    <form action="_actions/login.php" method="post">
                    <div class="inputBox">
                    <input class="text-secondary" type="text" name="email" placeholder="Username">
                    </div>
                    <div class="inputBox">
                    <input class="text-secondary" type="password" name="password" placeholder="Password">
                    </div>
                    <div class="inputBox">
                        <input type="submit" value="Login">
                    </div>
                    <p class="forget">Forgot Password ?<a href="">Click Here</a></p>
                    <p class="forget">Don't have an account ?<a href="register.php">Sign up</a></p>
                    </form>
                </div>
            </div>
        </div>
    </section>
    </div>
    <?php endif ?>
</body>
</html>