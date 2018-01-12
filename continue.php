<?php

// for($i = 0; $i < 10; ++$i) {
// 	if($i == 4) {
// 		continue;
// 	}
// 	printf($i . "\n");
// }

for($i = 0; $i < 3; ++$i) {
	for($j = 0; $j < 3; ++$j) {
		if($i == 1 && $j == 1) {
			continue;
		}
		printf($i + $j . ' ');
	}
	printf("\n");
}