<?php
/**
 * Created by PhpStorm.
 * User: Максим
 * Date: 08.05.2016
 * Time: 1:06
 */
echo "a: [".(20 > 9)."]<br>";
echo "b: [".(5 == 6)."]<br>";
echo "c: [".(1 == 0)."]<br>";
echo "d: [".(1 == 1)."]<br>";
echo "e: [". TRUE ."]<br>";
echo "f: [". FALSE ."]<br>";

// Использование переменных 2 первых и литералов 3 последних.
$myname = "Maxim Mnakov";
$myage = 29;
echo $myname."<br>";
echo $myage."<br>";
echo "67"."<br>";
echo "Hello"."<br>";
echo FALSE."<br>";

$day_number = 156;
$day_to_new_year = 365 - $day_number;
if($day_to_new_year < 30)
{
    echo "Скоро новый год";
}
// сначало вычисляется правая частть выражения и затем в лево идет присваивание
$level = $score = $time = 0;
$month = "Март";
if($month == "Март")
{
    echo "Пришла весна<br>";
}
$a = "1000";
$b = "+1000";
if($a == $b)
{
    echo $a." == ".$b;
}
if($a === $b)
{
    echo $a." === ".$b;
}
echo "<br>";
if($a != $b)
{
    echo $a." != ".$b;
}
if($a !== $b)
{
    echo $a." !== ".$b;
}
echo "<br>";
$a = 2; $b = 3;
if($a > $b)
{
    echo $a. " > ". $b."<br>";
}
if($a < $b)
{
    echo $a. " < ". $b."<br>";
}
if($a >= $b)
{
    echo $a. " >= ". $b."<br>";
}
if($a <= $b)
{
    echo $a. " <= ". $b."<br>";
}
$a = 0;
$b = 1;
if($a and $b)
{
   echo "$a and $b <br>";
}
if($a or $b)
{
    echo "$a or $b <br>";
}
if($a xor $b)
{
    echo "$a xor $b <br>";
}
if(!$a)
{
    echo "not $a <br>";
}
$menu = "Link";
switch ($menu){
    case "Home":
        echo "Попали в инструкцию Home";
        break;
    case "Link":
        echo "Попали в инструкцию Link";
        break;
    default :
        echo "Ни попали ни в одну инструкцию";
        break;
}
echo "<br>";
// Если выражение истина то присваевается первое значение в противном случае второе.
$result = 1 > 2 ? "Истина" : "Ложь";
echo $result;
$false = "0";
if($false === false)
{
    echo "Строки не ковертируются в булевый тип<br>";
}
else
{
    echo "Строки ковертируются в булевый тип<br>";
}
?>