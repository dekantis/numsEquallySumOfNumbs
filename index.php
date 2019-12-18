<?php

//Задача: Получить  все  четырехзначные  числа,  сумма  цифр  которых  равна заданному числу  n.

//Функция, суммирующая цифры в числе
function SumOfNumbs(int $numb): int
{
    return $numb = $numb>9 ? $numb%10 + SumOfNumbs($numb/10) : $numb;
}

$n=23;//заданное число

//перебор чисел для суммирования цифр
for ($i=1000; $i<10000;$i++) {
    if ($n == SumOfNumbs($i)){
        echo $i."\n";
    }
}


