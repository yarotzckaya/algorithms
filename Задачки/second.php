<?php
/**
Написать консольную приложеньку, которая меняет местами в числовом массиве самый большой и самый маленький элемент.
Пример: [7, 2, 15, 93, 8, 41, 50, 1, 0, 14] -> [7, 2, 15, 0, 8, 41, 50, 1, 93, 14].
*/

$line = fgets(STDIN);
$line = trim($line);
$arr = explode(' ', $line);	  	// cоздаем массив из строки

$min = min($arr);
$max = max($arr);

for ($i=0; $i < count($arr); $i++) {
	if($arr[$i] == $min){
		for ($j=0; $j < count($arr); $j++) { 
			if($arr[$j] == $max){
				$arr[$j] = $min;
				$arr[$i] = $max;
				echo $arr[$j] . ' ' . $arr[$i];

				break 2;
			}
		}
	}
}

// Professor's solution.
//
// $minIndex = 0;
// $maxIndex = 0;

// for ($i = 1; $i < count($arr); $i++) {
// 	if ($arr[i] < $arr[$minIndex]) {
// 		$minIndex = $i;
// 	}
// 	if ($arr[i] > $arr[$maxIndex]) {
// 		$maxIndex = $i;
// 	}
// }

// $temp = $arr[$minIndex];
// $arr[$minIndex] = $arr[$maxIndex];
// $arr[$maxIndex] = $temp;

print_r($arr);