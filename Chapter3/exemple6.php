<?php
/**
 * Created by PhpStorm.
 * User: Максим
 * Date: 07.05.2016
 * Time: 20:19
 */
define("MY_CONSTANT",12345);
echo "<br>";
echo "Моя константа ".MY_CONSTANT;
echo "<br>";
echo "Первые 2 символа моей константы: ".substr(MY_CONSTANT, 0, 2);
echo "<br>";
echo "Константы языка PHP встроенные. Имя файла: " .__FILE__." и номер строчки кода ".__LINE__;
echo "<br>";
$b = 1;
$b ? print "TRUE" : print "FALSE";