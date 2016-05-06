<?php
/**
 * Created by PhpStorm.
 * User: Максим
 * Date: 06.05.2016
 * Time: 19:48
 */
$max = "Минаков Максим";
echo "<br>";
echo "Разработчик PHP. Разработчик PHP. Разработчик PHP. Разработчик PHP - $max";
echo "<br>";
$bill_geyts = "Бил Гейтс";

$windows = "$bill_geyts создатель дорогой 
операционной системы 
Windows";

echo "<br>";
echo $windows;

$author = "Alfred E Newman";
echo <<<_END
Пример строки,
охватывающей несколько строчек,
с использованием heredoc-синтаксиса.
$author;
_END;
echo "<br>";
$out = <<<_END
Здесь какойто текст; '<br>' Но строчки со строчки на строчку не прыгают.!
И кнопка с новой строки
А зедсь другой 
$author;
_END;
echo $out;
// Подстрока из числа
echo "<br>";
$nubmer = 152 * 2552;
echo  "Результат выражения 152 * 2552 = $nubmer";
echo "<br>";
$result = substr($nubmer, 0, 1);
echo "Первая цифра в числе $nubmer это $result";

$pi = "3.1415927";
$radius = 5;
echo "<br>";
echo "Площадь круга с радиусом $radius м.". $pi * ($radius * $radius) ." м.";
