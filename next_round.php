<?php 

// следующий раунд

// fscanf(STDIN, '%d%d\n', $n, $k); 

// $line = fgets(STDIN);
// $points = array_map('intval', explode(' ', $line));
// $result = array();

// // $points[$k] - позиция $k

// for($i = 0; $i < $n; $i++) {
// 	if ($points[$i] > 0) {
// 		if($points[$i] >= $points[$k - 1]) {
// 			array_push($result, $points[$i]);
// 		} 
// 	}
// }
// printf(count($result));

// from Anton with love
// Improvement №1
fscanf(STDIN, '%d%d\n', $n, $k); 

$line = fgets(STDIN);
$points = array_map('intval', explode(' ', $line));
$count = 0;

// $points[$k] - позиция $k

for($i = 0; $i < $n; $i++) {
	if ($points[$i] > 0) {
		if($points[$i] >= $points[$k - 1]) {
			$count++;
		} 
	}
}
printf($count);

// Improvement №2
fscanf(STDIN, '%d%d\n', $n, $k);

// fgets reads a line from a file.
// Only one line, no format string.
$line = fgets(STDIN);
$points = explode(' ', $line);	// расфигачить массив на отдельные кусочки 
for($i = 0; $i < $points); ++$i) {	// преобразование кусочков в тип числа
	$points[$i] = (int)$points[$i];
}

$index = $k - 1;
$score = $points[$index];
$count = $k;
if($score == 0) {
    while($points[$index] == 0) {
    	--$index;
    }
} else {
	while($points[$index] == $score) {
		++$index;
	}
}