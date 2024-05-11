<?php
SESSION_START();

?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <script src="../js/bootstrap.js"></script>
    <script src="../js/jQuery-3.7.0/jquery-3.7.0.js"></script>
    <link rel="stylesheet" href="../css/login.css">
    <title>Login</title>
</head>
<body>

<div class="wrapper">
    <form class="form-signin" method="post" action="login_p.php">
        <h2 class="form-signin-heading">Login</h2>
        <input type="text" class="form-control" name="username" placeholder="Nombre de usuario" required="" autofocus="" />
        <input type="password" class="form-control" name="password" placeholder="Password" required=""/>

        <?php
        if(isset($_SESSION['error_login'])){
            ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>¡ERROR!</strong> <?php echo $_SESSION['error_login'] ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php
            session_destroy();
        }
        ?>

        <div class="row">
            <label class="checkbox">
                <input type="checkbox" value="remember-me" id="rememberMe" name="rememberMe"> Remember me
            </label>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
        </div>
    </form>
</div>



</body>
</html>

