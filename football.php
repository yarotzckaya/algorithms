<?php

/**
Петя очень любит футбол. Однажды, глядя футбольный матч, он записывал на листе бумаги текущее положение игроков. Для простоты он изобразил ситуацию в виде строки из нулей и единиц. Ноль соответствует игрокам одной команды, единица — игрокам другой команды. Если есть как минимум 7 игроков некоторой команды, стоящих подряд, то эта ситуация считается опасной. Например, ситуация 00100110111111101 — опасная, а 11110111011101 — нет. Вам задана текущая ситуация. Определите, является ли она опасной.

Входные данные
В первой строке ввода задана непустая строка из символов «0» и «1», обозначающих игроков. Длина строки не превышает 100 символов. От каждой команды на поле присутствует хотя бы один игрок.

Выходные данные
Выведите «YES» если ситуация опасная. В противном случае выведите «NO».
*/

fscanf(STDIN, '%s\n', $line);	// считываем последовательность

$result = "NO";

$line = str_split($line);		// превращаем строку в массив, каждый элемент которого - 1 цифра

//прыгаем от позиции к позиции, выясняя, есть ли 7 одинаковых позиций подряд

// for($i = 0; $i < count($line); $i++) {	
// 	if($line[$i] == '0') {								// 0
// 		if($line[$i + 1] == '0') {						// 0
// 			if($line[$i + 2] == '0') {					// 0
// 				if($line[$i + 3] == '0'){  				// 0
// 					if($line[$i + 4] == '0') { 			// 0
// 						if($line[$i + 5] == '0') {		// 0
// 							if($line[$i + 6] == '0') {	// 0
// 								$result = "YES";
// 							}
// 						}
// 					}

// 				}	
// 			}
// 		}
// 	}

// 	 if ($line[$i] == '1') {						// 1
// 		if($line[$i + 1] == '1') {						// 1
// 			if($line[$i + 2] == '1') {					// 1
// 				if($line[$i + 3] == '1'){  				// 1
// 					if($line[$i + 4] == '1') { 			// 1
// 						if($line[$i + 5] == '1') {		// 1
// 							if($line[$i + 6] == '1') {	// 1
// 								$result = "YES";
// 							}
// 						}
// 					}

// 				}	
// 			}
// 		}
// 	} 

// }

// printf($result);



// Solution 1 (Antonio for Snotinka)

if(strpos($line, '0000000') !== false || strpos($line, '1111111') !== false) {	// strpos() может вернуть 0 как позицию, и чтобы не принять ее за фолс - юзаем !==
	printf('YES');
} else { 
	printf('NO');
}

// end of Solution 1

// Solution 2 (Tosha for Snotya)

$line = str_split($line);

$symbol = $line[0];
$count = 1;
for($i = 1; $i < count($line); ++$i) {
	if($line[$i] == $symbol) {
		++$count;
		if($count == 7) {
			printf('YES');
			break;
		}
	} else {
		$symbol = $line[$i];
		$count = 1;
	}
}

if($count != 7) {
	printf('NO');
}

// end of Solution 2