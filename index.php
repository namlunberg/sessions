<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

header("content-type: text/html");



session_start();

if (!isset($_SESSION['desc'])) {
    $_SESSION['desc'] = 'test';
} else {
    echo "содержимое сессии определено как " . $_SESSION['desc'] . " , а значит существувет" . "<br>";
}

$_SESSION['lobster'] = 'йьыъ';  

if (!isset($_SESSION['counter'])) {
    $_SESSION['counter'] = 0;
    echo 'ещё не обновляли' . PHP_EOL;
} else {
    $_SESSION['counter']++;
    echo "обновляли " . $_SESSION['counter'] . " раз" . "<br>";
}
?>

<form action="">
    <input type="text" name="country" placeholder="страна">
</form>

<?php
if (isset($_GET['country'])) {
    $_SESSION['country'] = $_GET['country'];
}


if (!isset($_SESSION['time'])) {
    $_SESSION['time'] = time();
}

$now = time();
echo "пользователь зашёл " . ($now - $_SESSION['time']) . " секунд назад";

?>

<form action="">
    <input type="email" name="email" placeholder="емаил">
</form>

<?php
if (isset($_GET['email'])) {
    $_SESSION['email'] = $_GET['email'];
}

?>

<form action="">
    <input type="name" name="name" placeholder="имя">
    <input type="name" name="family" placeholder="фамилия">
    <input type="password" name="password" placeholder="пароль">
    <input type="email" name="email" placeholder="емаил" value="<?php if (!empty($_SESSION['email'])){echo $_SESSION['email'];}?>">
</form>