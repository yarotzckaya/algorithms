<?php

/**
Написать консольную приложеньку, которая считает сумму элементов числового массива на нечетных позициях (1, 3, 5 и т.д.)
Пример: [2, 4, 12, 2, 1, 7, 9, 5] -> 4 + 2 + 7 + 5 -> 18.
*/

//fscanf(STDIN, '%s\n', $line); 	// это не сработало, хз почему
$line = fgets(STDIN);
$line = trim($line);
$arr = explode(' ', $line);	  	// cоздаем массив из строки
$result = [];

for ($i=1; $i < count($arr); $i = $i+2) { 
	$result[] = $arr[$i];
}


// Professor's solution:
//
// $sum = 0;
// for ($i=1; $i < count($arr); $i = $i+2) {
// 	$sum += $arr[$i];
// }

print_r(array_sum($result));

