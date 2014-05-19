<html xmlns="http://www.w3.org/1999/html">
<head>
    <title>Регистрация</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
</html>

<?php
$link = mysql_connect('localhost', 'root', '');
if(!$link){
    die('Error!'.mysql_error());
}
mysql_select_db("login", $link);

if (isset($_POST['login'])){
    $login = $_POST['login'];
    if ($login == ''){
        unset($login);
    }
} //заносим введенный пользователем логин в переменную $login, если он пустой, то уничтожаем переменную
if (isset($_POST['password'])){
    $password=$_POST['password'];
    if ($password ==''){
        unset($password);
    }
}
//заносим введенный пользователем пароль в переменную $password, если он пустой, то уничтожаем переменную
if (empty($login) or empty($password)) //если пользователь не ввел логин или пароль, то выдаем ошибку и останавливаем скрипт
{
//setcookie("test", 0);
// $reg = 'reg.php';
// $host = $_SERVER['HTTP_HOST'];
// $uri = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
    header("Location: reg.php?var=0");
}

$login = stripslashes($login);
$login = htmlspecialchars($login);
$password = stripslashes($password);
$password = htmlspecialchars($password);
//удаляем лишние пробелы
$login = trim($login);
$password = trim($password);

$result = mysql_query("SELECT id FROM users WHERE login='$login'",$link);
$myrow = mysql_fetch_array($result);
if (!empty($myrow['id'])) {
    header("Location: reg.php?var=0");
}
// если такого нет, то сохраняем данные
$result2 = mysql_query ("INSERT INTO users (login,password) VALUES('$login','$password')");
// Проверяем, есть ли ошибки
if ($result2=='TRUE')
{
// $reg = 'reg.php';
// $host = $_SERVER['HTTP_HOST'];
// $uri = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
    $index = 'index.php';
    $host = $_SERVER['HTTP_HOST'];
    $uri = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
    header("Location: http://$host$uri/$index?test=1");
}
else {
print <<<HERE
<div class="alert alert-block">
<button type="button" class="close" data-dismiss="alert">&times;</button>
<h4>Внимание!</h4>
    Вы не зарегистрированы.
</div>
HERE;
}
?>