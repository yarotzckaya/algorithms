<?php

//слишком длинные слова

fscanf(STDIN, '%d\n', $n);

$strings = array();
$output = array();

for($i = 0; $i < $n; ++$i) {
	fscanf(STDIN, '%s\n', $strings[$i]);
	if(strlen($strings[$i]) > 10) {

		$result =  $strings[$i][0] . (strlen($strings[$i]) - 2) . substr($strings[$i], -1);

		array_push($output, $result);

		//printf($result);
	} else {
		array_push($output, $strings[$i]);
	}
}

//printf($output);
foreach($output as $value) {
	printf($value . "\n");
}