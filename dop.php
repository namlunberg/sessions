<?php
header("content-type: text/html");

$array = [2, 5, 3, 9];
$result = 0;
foreach ($array as $key => $value) {
    if (($key%2) == 0) {
        $value *= $array[++$key];
        $result += $value;
    } 
}

echo $result . "<br>";

echo "<br>";

for ($i = 1; $i < 10; $i++) {
    $n = 1;
    $str = "";
    while($n <= $i) {
        $str .= $i;
        $n++;
    }
    echo $str . "<br>";
}

?>

<form action="">
    <input type="number" name="a">
    <input type="number" name="b">
    <input type="submit">
    <br>
</form>

<?php

function neMoguPridumatNazvanie(int $number):array {
    $array = [];
    for ($i = 1; $i <= $number; $i++) {
        if (($number % $i) == 0) {
            $array[] = $i;
        }
    }
    return $array;
}

if (isset($_GET["a"], $_GET["b"])) {
    $first = $_GET["a"]; 
    $second = $_GET["b"];
    $arrayFirst = neMoguPridumatNazvanie($first);
    $arraySecond = neMoguPridumatNazvanie($second);
    $arrayBoth = array_intersect($arrayFirst, $arraySecond);
    echo "<pre>";
    var_dump($arrayBoth);
    echo "</pre>";
}

?>

<form action="">
    <input type="number" name="number">
    <input type="submit">
    <br>
</form>

<?php

if (isset($_GET["number"])) {
    $number = $_GET["number"];
    for ($i = 1, $value = 1; $i <= $number; $i++) {
        $value *= $i;
        echo $value . "<br>";
    }
    echo $value . "<br>";
}

$date = '2025-12-31T12:13:59';
$date = date("H:i:s d.m.Y", strtotime($date));
echo $date . "<br>";

$dirName = './dir';
$files = scandir($dirName);
$files = array_diff($files, ['.', '..']);
foreach ($files as $file) {
    echo file_get_contents($dirName . "/" . $file) . "<br>";
}

$file = file_get_contents('./test.txt');
$file *= $file;
file_put_contents('./test.txt', $file);

$str = 'hello.site.ru';
preg_match('/\w+\.[\w-]+\.\w{2,6}/', $str, $out);

$str = 'waaa';
$str = preg_replace('/(?<=[ac-zAC-Z])aaa/', '!', $str);
echo $str;