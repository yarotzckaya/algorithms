<?php

//  упражнение на строки

fscanf(STDIN, '%s\n', $n);
//$n = array();
//$result = array();




for($i = 0; $i < strlen($n); $i++) {
	if($n[$i] !== "A" 
		&& $n[$i] !== "O" 
		&& $n[$i] !== "Y" 
		&& $n[$i] !== "E" 
		&& $n[$i] !== "U" 
		&& $n[$i] !== "I" 
		&& $n[$i] !== "a" 
		&& $n[$i] !== "o" 
		&& $n[$i] !== "y" 
		&& $n[$i] !== "e" 
		&& $n[$i] !== "u" 
		&& $n[$i] !== "i") {
		//mb_strtolower($n[$i]);
		printf("." . mb_strtolower($n[$i]));	
	}	
}

// from Kakashka with love, exclusively for Snotinka

$vowels = [
	'A', 'O', 'Y', 'E', 'U', 'I',
	'a', 'o', 'y', 'e', 'u', 'i'
];

for($i = 0; $i < strlen($n); $i++) {
	if(!in_array($n[$i], $vowels)) {
		printf("." . mb_strtolower($n[$i]));
	}
}
