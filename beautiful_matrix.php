<?php

/**
Перед Вами матрица размера 5 × 5, состоящая из 24-x нулей и единственной единицы. Строки матрицы пронумеруем числами от 1 до 5 сверху вниз, столбцы матрицы пронумеруем числами от 1 до 5 слева направо. За один ход разрешается применить к матрице одно из двух следующих преобразований:

Поменять местами две соседние строки матрицы, то есть строки с номерами i и i + 1 для некоторого целого i (1 ≤ i < 5).
Поменять местами два соседних столбца матрицы, то есть столбцы с номерами j и j + 1 для некоторого целого j (1 ≤ j < 5).
Вы считаете, что матрица будет выглядеть красиво, если единственная единица этой матрицы будет находиться в ее центре (в клетке, которая находится на пересечении третьей строки и третьего столбца). Посчитайте, какое минимальное количество ходов потребуется, чтобы сделать матрицу красивой.

Входные данные
Входные данные состоят из пяти строк, в каждой из которых записаны пять целых чисел: j-ое число в i-ой строке входных данных обозначает элемент матрицы, стоящий на пересечении i-ой строки и j-ого столбца. Гарантируется, что матрица состоит из 24-x нулей и единственной единицы.

Выходные данные
Выведите единственное целое число — минимальное количество действий, которое требуется, чтобы сделать матрицу красивой.
*/


/* решение по считыванию матрицы от преподавателя PHPAcademy. Для задачи не подходит, но в целом работчее

# TODO: Add enter data validation

echo 'Enter matrix rows quantity: ';
$rows = trim(fgets(STDIN));

echo 'Enter matrix columns quantity: ';
$columns = trim(fgets(STDIN));

$matrix = [];

for($row = 1; $row <= $rows; $row++) {
    for ($column = 1; $column <= $columns; $column++) {
        echo "Enter {$column}x{$row} value: ";
        $matrix[$row][$column] = trim(fgets(STDIN));
    }
}

# TODO: Render prepared matrix with pseudo graphics
*/ 

$matrix = [];

$rows = 5;
// считываем матрицу
for($i = 0; $i < $rows; $i++) {
	$line = fgets(STDIN); // '1 2 3 4 5\n'
	$values = explode(' ', $line); // ['1', '2', '3', '4', '5\n']
	for($j = 0; $j < count($values); $j++) {
		$matrix[$i][$j] = (int)$values[$j]; // 1 2 3 4 5
		
	}
}
$total = 0;

for($i = 0; $i < 5; $i++){
	for ($j = 0; $j < 5; $j++) { 
		if($matrix[$i][$j]  == 1){

			// считаем, на сколько строк и колонок нужно сдвинуть еденицу
			if($i == 0){
				$total += 2;
			}
			if($i == 1){
				$total += 1;
			}
			if($i == 3){
				$total += 1;
			}
			if($i == 4){
				$total += 2;
			}
			if($i == 2){
				$total += 0;
			}
			

			if ($j == 0) {
				$total += 2;
			}
			if($j == 1){
				$total += 1;
			}
			if($j == 3){
				$total += 1;
			}
			if($j == 4){
				$total += 2;
			}
			if($j == 2){
				$total += 0;
			}
		}
	}
}


printf($total);

// fAfS

for($i = 0; $i < count($matrix); $i++){
	for ($j = 0; $j < count($matrix[$i]); $j++) { 
		if($matrix[$i][$j] == 1) {

		}
	}
}