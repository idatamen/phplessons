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
             array('x', ' ','x'));

echo $oxo[2][1]; // ' '
echo "<br>";
echo $oxo[1][0]; // 'x'
echo "<br>";
echo $oxo[0][0]; // 'o'
echo "<br>";

?>