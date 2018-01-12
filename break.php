<?php

// for($i = 0; $i < 10; ++$i) {
// 	if($i == 4) {
// 		break;
// 	}
// 	printf($i . "\n");
// }

for($i = 0; $i < 3; ++$i) {
	for($j = 0; $j < 3; ++$j) {
		if($i == 1 && $j == 1) {
			break;
			// break 2;
		}
		printf($i + $j . ' ');
	}
	printf("\n");
}
