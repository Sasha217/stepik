<?php
list($a, $b) = explode(' ', trim(fgets(STDIN)));

echo "Мы ввели переменные:\n";
echo $a." ".$b . "\n";
$c=$b;
$b=$a;
echo "Теперь меняем их местами:\n";
echo $c." ".$b . "\n";
?>