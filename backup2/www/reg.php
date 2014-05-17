<!DOCTYPE html>
<html>
<head>
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="./js/bootstrap.js"></script>
    <title>PlanB</title>
    <link rel="shortcut icon" href="./images/1 (1).png" type="image/x-icon">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="./css/bootstrap.css" media="screen">
    <script>
        window.onload = function () {
            document.getElementById("enter").disabled = true;
        }
        function functionName(){
            var val1 = document.getElementById("id-login").value;
            var val2 = document.getElementById("id-pass").value;

              if(val1 == '' || val2 == '' || /^[a-zA-z]{1}[a-zA-Z1-9]{3,20}$/.test(val1) === false)
                  document.getElementById("enter").disabled = true;
            else
                  document.getElementById("enter").disabled = false;

        }
        </script>
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
                <input type="text" id="id-login" placeholder="Логин" name="login" oninput="functionName();">
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="inputPassword" >Password</label>
            <div class="controls">
                <input type="password" id="id-pass" placeholder="Пароль" name="password" oninput="functionName();">
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