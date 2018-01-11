<?php
fscanf(STDIN, "%d%d%d\n", $n, $m, $a);

	$length = intdiv($n, $a);
	$width =  intdiv($m, $a);

	if ($n % $a != 0) {
		$length = $length + 1;
	}

if ($m % $a != 0) {
		$width = $width + 1;
}

$count = $length * $width;
printf('%.0f', $count);