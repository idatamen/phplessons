<?php
/**
 * Created by PhpStorm.
 * User: Максим
 * Date: 06.05.2016
 * Time: 18:28
 */
// Массив массивов двухмерный
$oxo = array(array('o', ' ','x'),
             array('x', 'o',' '),
             array('x', ' ','x'),
             array(array("как его добыть", "или это"), array("просто текст", "еще текст")));


echo $oxo[2][1]; // ' '
echo "<br>";
echo $oxo[1][0]; // 'x'
echo "<br>";
echo $oxo[0][0]; // 'o'
echo "<br>";
echo $oxo[3][0][0]; // "как его добыть"
echo "<br>";
$y = 0;
if($y == 0) echo $y; // 0
echo "<br>";
if(++$y != 0) echo $y; // 1
echo "<br>";
$y--;
if($y == 0) echo $y; // 0

echo "<br>";
$age = 29;
// Как работают двойные и одинарные кавычни в строках.
echo "Мой возраст \t равен \"$age\" годам";
echo "<br>";
// Символ точка объеденяет строки
echo 'Мой воззраст' . ' \t равен \"$age\"' . 'годам';
?>
