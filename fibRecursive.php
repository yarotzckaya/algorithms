y<?php

// function
// function fibRecursive($n) {
// 	if ($n <= 1) {
// 		return $n;
// 	} else {
// 		$result = fibRecursive($n - 1) + fibRecursive($n - 2);
// 		return $result;
// 	}
// }


// for bash

fscanf(STDIN, '%d\n', $n); // $n - это позиция числа в ряду Фибоначчи, которое нужно вывести
$fibLine = array();

// ряд фибоначчи: 0, 1, 1, 2, 3, 5, 8, 13...
// отсчет начинаем с нуля
$previous = 0;
$current = 1;
while($current < 100000) {
	$sum = $previous + $current; 
	$previous = $current;  		
	$current = $sum;			
	array_push($fibLine, $sum); // впихиваем ряд фибоначчи в массив 
}	 
	
printf($fibLine[$n - 2]);		// выводим элемент массива с позицией $n - 2 (т.к. первые две позиции мы пропустили, используя их в рассчетах как $previous и $current)
