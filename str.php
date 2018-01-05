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



