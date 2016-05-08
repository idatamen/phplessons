<?php
/**
 * Created by PhpStorm.
 * User: Максим
 * Date: 08.05.2016
 * Time: 21:57
 */
$count = 1;
while ($count <= 12)
{
    echo "Число $count * 12 равно ". ($count * 12) ."<br>";
    ++$count;
}

$count = 0;
// другой вариант написания цикла
while (++$count <= 12)
{
    echo "Число $count * 12 равно ". ($count * 12) ."<br>";
}
// третий вариант условие выполнится хотябы 1 раз, т.к. подряд идут строчки и проверка
// в конструкцие while проходит на следующем шаге.
$count = 0;
do
{
    echo "Число $count * 12 равно ". ($count * 12) ."<br>";
}
while (++$count <= 12);
// использование цекла фор что произайдет с count?
for($i = 1; $i <= 12; ++$i)
{
    echo "Число $i * 12 равно ". ($i * 12) ."<br>";
}
if($i)
{
    echo $i;
}
// работа с файлом.
/*
$fp = fopen("text.txt", "wb");
for($i = 0; $i < 100; ++$i)
{
    $writen = fwrite($fp, "data");
    if($writen == false)
    {
        break;
    }
}
fclose($fp);
*/
$i = 15;
while ($i-- > - 10)
{
    if($i == 0)
    {
        continue; // приривает именно эту итерацию цикла
    }
    echo "результат операции: 100 / $i равен ". (100 / $i);
}

$a = 10;
$b = 21;
$c = $b / $a;
echo "<br>";
echo $c;
echo "<br>";
$c = (int)($b / $a);
echo $c;