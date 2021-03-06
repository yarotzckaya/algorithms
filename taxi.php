<?php
/**
После окончания уроков n групп школьников вышли на улицу и собрались ехать домой к Поликарпу на празднование его дня рождения. Известно, что i-ая группа состоит из si друзей (1 ≤ si ≤ 4), которые не хотят расставаться по пути к Поликарпу. Решено ехать на такси. Каждая машина может вместить не более четырех пассажиров. Какое минимальное количество машин потребуется школьникам, если каждая группа должна целиком находиться в одной из машин такси (но одна машина может вмещать более чем одну группу)?

Входные данные
В первой строке записано целое число n (1 ≤ n ≤ 100000000) — количество групп школьников. Вторая строка содержит последовательность целых чисел s1, s2, ..., sn (1 ≤ si ≤ 4). Числа записаны через пробел, si — количество ребят в i-ой группе.

Выходные данные
Выведите единственное число — минимальное необходимое количество такси, чтобы отвезти всех ребят к Поликарпу.


Примечание
В первом тесте возможно следующее распределение по четырем машинам:

третья группа (из четырех школьников),
четвертая группа (из трех школьников),
пятая группа (из трех школьников),
первая и вторая группы (из одного и двух школьников соответственно).
Существуют и другие способы расположиться в четырех машинах.
*/

fscanf(STDIN, '%d\n', $n);	// считываем кол-во групп школьников

$line = fgets(STDIN);				// считываем группы школьников как строку
$groups = explode(' ', $line);	// теперь groups - это массив чисел

// инициализируем группы из разного кол-ва школьников (по сколько групп с таким кол-вом школьников)
$groupOfOne = 0;
$groupOfTwo = 0;
$groupOfThree = 0;
$groupOfFour = 0;

for($i = 0; $i < count($groups); ++$i) {
	$groups[$i] = (int)$groups[$i];
	if($groups[$i] == 1) {	// если в группе 1 школьник
		$groupOfOne += 1;	// добавляем его ( как группу) к кол-ву таких же групп
	}
	if($groups[$i] == 2) {	// если в группе 2 школьника - увеличиваем кол-во групп из 2-х школьников на 1
		$groupOfTwo += 1;
	}
	if($groups[$i] == 3) {	// если 3 - увеличиваем колв-о групп школьников из 3-х человек на 1
		$groupOfThree += 1;
	}
	if($groups[$i] == 4) {	// то же самое
		$groupOfFour += 1;
	}
}

// $taxi - это счетчик такси (сколько такси нам понадобится)
$taxi = 0;
$taxi += $groupOfFour;	// на каждую группу из 4-х человек нам точно нужна одна машина - заполняем каждую машину группой.

// 3 + 1
$min = min($groupOfThree, $groupOfOne);	// выбираем комбинации из 3 человек + 1 человека (берем меньшее составляющее, если групп из одного человека меньше - то и кол-во комбинаций будет столько же)
$taxi += $min;	// добавляем эти комбинации 3+1 в машины
$groupOfThree -= $min; 	// считаем, сколько групп из тех, что участвовали в комбинациях, остались нерассаженными (считаем для групп из 3 человек)
$groupOfOne -= $min;		// считаем остаток для групп из одного человека

// сажаем в машины оставшиеся от распределения в комбинациях группы из 3-х школьников (если остались)
$taxi += $groupOfThree;

// 2
$taxi += floor($groupOfTwo / 2);	// считаем, сколько машин нужно, чтобы рассадить по 2 группы в каждую машину
$groupOfTwo = $groupOfTwo % 2;		// считаем, осталось ли что-то нерассаженное (остаться может 1 группа)

// all 2 + 1
$fancyCar = 0;			// Возможно, осталась 1 группа из 2-х человек (остаток от всех рассаживаний)
$fancyCar = $groupOfTwo * 2;	// fancy car - это счетчик людей в одной машине. Т.к. $groupOfTwo состоит из двух людей, то, чтобы посчитать кол-во людей и добавить их в машину, множим на два (количество групп на кол-во людей в них.

while($groupOfOne > 0 && $fancyCar < 4) {	// заполняем машину людьми из групп по одному человеку
	$fancyCar += 1;
	$groupOfOne -= 1;
}

if($fancyCar > 0) {		// проверяем, есть ли в $fancyCar хоть кто-то. Если да, и человек в нее садится - увеличиваем счетчик на 1
	$taxi += 1;
}

// all 1
$taxi += ceil($groupOfOne / 4);	// рассаживаем всех, кто влез в fancyCar по такси

printf($taxi);
