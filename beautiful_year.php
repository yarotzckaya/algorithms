<?php

/**
Кажется, еще совсем недавно наступил новый 2013 год. А знали ли Вы забавный факт о том, что 2013 год является первым годом после далекого 1987 года, в котором все цифры различны?

Теперь же Вам предлагается решить следующую задачу: задан номер года, найдите наименьший номер года, который строго больше заданного и в котором все цифры различны.

Входные данные
В единственной строке задано целое число y (1000 ≤ y ≤ 9000) — номер года.

Выходные данные
Выведите единственное целое число — минимальный номер года, который строго больше y, в котором все цифры различны. Гарантируется, что ответ существует.
*/

fscanf(STDIN, '%s\n', $year);
$yearArray = str_split($year);

$nextYear = $year + 1;						// nextYear - это число, напр. 1998

for($i = 0; $i < $nextYear; $i++){
	$nextYearArray = str_split($nextYear);		// nextYearArray это массив чисел от nextYear
	if($nextYearArray !== array_unique($nextYearArray)){
		$nextYear++;
	}else{
		print_r($nextYear);
		break;
	}
}

