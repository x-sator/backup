<!DOCTYPE html>
<html>
<head>
    <title>Симулятор бомжа</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="css/bootstrap.css" media="screen">
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/jquery-ui-1.10.4.custom.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
</head>
<style>
    #loginform{
        position: absolute;
        top: 30%;
        left: 30%;
    }
</style>
<body>
<div id="loginform">
    <form action="postto.php" method="post" class="form-horizontal">
        <div class="control-group">
            <label class="control-label" for="inputLogin">Login</label>
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
                <button type="submit" class="btn" id="enter">Регистрация</button>
            </div>
        </div>
    </form>
    <?php
    if(isset($_GET['var']) && $_GET['var'] == 0){
print <<<HERE
<div class="alert alert-block">
<button type="button" class="close" data-dismiss="alert">&times;</button>
<h4>Внимание!</h4>
        Вы неправильно ввели логин или пароль.
</div>
HERE;
}
    ?>

</div>
</body>
</html>
}