<?php
header("content-type: text/html");

setcookie('test', '123', time() + 3600);
setcookie('test', '123', time() - 1);

$i = !isset($_COOKIE['counter']) ? 1 : ++$_COOKIE['counter'];

setcookie('counter', $i, time() + 3600);

?>

<form action="">
    <input type="text" name="day" placeholder="день" require>
    <input type="text" name="month" placeholder="месяц" require>
    <button type="submit"></button>
</form>

<?php

if (isset($_GET['day'], $_GET['month'])) {
    $day = $_GET['day'];
    $month = $_GET['month'];
    $birthday = mktime(0, 0, 0, $month, $day);
    $today = mktime(0, 0, 0);
    $toBD = ($birthday - $today)/86400;
    setcookie('birthday', $toBD, time() + 3600);
    if ($toBD > 0) {
        echo "до дня рождения осталось " . $_COOKIE['birthday'] . " дней";
    } elseif ($toBD == 0) {
        echo "день рождения сегодня";
    }
}