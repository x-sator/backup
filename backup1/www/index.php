<?php
session_start();
?>
<html>
<head>
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="./js/bootstrap.js"></script>
    <title>Вход в систему</title>
    <link rel="shortcut icon" href="./images/1 (1).png" type="image/x-icon">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="./css/bootstrap.css" media="screen" />
</head>
<style>
    #loginform{
        position: absolute;
        top: 30%;
        left: 30%;
    }
    .alert{
        position: absolute;
        top: 110%;
        left: 10%;
        width: 400px;
    }
</style>
<body>
<div class="container">
    <div id="loginform">
        <form action="testreg.php" method="post" class="form-horizontal">
            <div class="control-group">
                <label class="control-label" for="inputEmail">Login</label>
                <div class="controls">
                    <input type="text" placeholder="Логин" name="login">
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="inputPassword">Password</label>
                <div class="controls">
                    <input type="password" placeholder="Пароль" name="password">
                </div>
            </div>
            <div class="control-group">
                <div class="controls">
                    <button type="submit" class="btn" id="enter">Войти</button>
                    <a href="reg.php">Зарегистрироваться</a>
                </div>
            </div>
        </form>

        <?php
        if(isset($_GET['test']) && $_GET['test'] == 0){
print <<<HERE
<div class="alert alert-warning">
<button type="button" class="close" data-dismiss="alert">&times;</button>
<h4>Внимание!</h4>
            Извините, введённый вами логин или пароль неверный.
</div>
HERE;
}
        if(isset($_GET['test']) && $_GET['test'] == 1){
print <<<HERE
<div class="alert alert-success">
<button type="button" class="close" data-dismiss="alert">&times;</button>
            Вы успешно зарегистрировались!
</div>
HERE;
}
        ?>
    </div>
</div>
</body>
</html>