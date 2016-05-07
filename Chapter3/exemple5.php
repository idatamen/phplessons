<?php
/**
 * Created by PhpStorm.
 * User: Максим
 * Date: 06.05.2016
 * Time: 21:22
 */
function longdate($timestamp)
{
    return date("l F jS Y", $timestamp);
}

echo longdate(time());
echo "<br>";

function longdate1($timestamp)
{
    $temp = date("l F jS Y", $timestamp);
    return "Дата ".$temp;
}

echo longdate1(time());
echo "<br>";

$temp = "Дата: ";
echo  $temp.longdate(time());
echo "<br>";

function longdate2($text, $timestamp)
{
    return $text.date("l F jS Y", $timestamp);
}
echo longdate2($temp, time());
echo "<br>";

function change_text($text)
{
    $text = $text." добавка";
    return $text;
}
echo change_text($temp);
echo "<br>";
echo $temp;
echo "<br>";
echo $temp = change_text($temp);

$_TEXT = "Дата: ";

function global_test($timestamp)
{
   global $_TEXT;
    return $_TEXT.longdate($timestamp);
}
echo "<br>";
echo global_test(time());

function change_global_text()
{
    // Важно указывать имя без знака $
    $GLOBALS['_TEXT'] = "Изменили текст!";
}

echo "<br>";

echo "текущий текст ".$_TEXT;
echo "<br>";
change_global_text();
echo "<br>";
echo "текст после вызова change_global_text() ".$_TEXT;

function change_global_text2()
{
    // Важно указывать имя без знака $
    global $_TEXT;
    $_TEXT = "Изменили текст еще раз другим способом!";
}
change_global_text2();
echo "<br>";
echo "текст после вызова change_global_text2() ".$_TEXT;

function static_text()
{
    static $count = 0;
    echo "<br>";
    echo "Счетчик показывает число: $count";
    static $count = 1+3;
    // интересно что инкрементировать можно а вот прибовлять единичку нельзя!
    $count++;
}

for($i = 0; $i < 10; $i++)
{
    static_text();
}
// $_GET и $_POST нужно экранировать используюя htmlentities();
