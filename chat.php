<?php

/**
Совсем недавно Вася научился печатать на клавиатуре и выходить в интернет. Он сразу же зашел в чат и решил поздороваться со всеми. Вася напечатал слово s. Считается, что у Васи получилось поздороваться, если из напечатанного слова можно удалить некоторые буквы так, чтобы получилось слово "hello". Например, если Вася напечатал слово "ahhellllloou", считается, что он поздоровался, а если он напечатал "hlelo", считается, что Васю не поняли, и ему не удалось поздороваться. По заданному слову s определите, удалось ли Васе поздороваться.

Входные данные
В первой и единственной строке записано слово s, которое напечатал Вася. Это слово состоит из маленьких букв латинского алфавита, его длина не меньше 1 и не больше 100 букв.

Выходные данные
Если Васе удалось поздороваться, выведите "YES", иначе выведите "NO".
*/

fscanf(STDIN, '%s\n', $line);
//$line = str_split($s);
$result = [];

$h = strpos($line, 'h');
$e = strpos($line, 'e');
$l1 = strpos($line, 'l');
$l2 = strpos($line, 'l');

$o = strpos($line, 'o');

array_push($result, $h);
array_push($result, $e);
array_push($result, $l1);
array_push($result, $l2);
array_push($result, $o);

print_r($result);


// $counter = 0;

// for($i = 0; $i < count($line); $i++){
// 	if($line[$i] == 'h'){
// 		$counter++;

// 		if($line[$i + 1] == 'h' || $line[$i+1] == 'e'){
// 			$counter++;

// 			if($line[$i + 2] == 'e' || $line[$i + 2] == 'l'){
// 				$counter++;

// 				if($line[$i + 3] == 'l' || $line[$i + 3] == 'o'){
// 					$counter++;

// 					if($line[$i + 4] == 'o' || $line[$i + 4] == 'o'){
// 					$counter++;
// 				}

// 				}
// 			}
// 		}
// 	}

// }



// if ($counter >= 4) {
// 	printf("YES");
// }else{
// 	printf("NO");
// }