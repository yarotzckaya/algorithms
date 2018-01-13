<?php
/**
Капитализация — это запись слова, в которой первая буква слова записывается как прописная буква. Ваша задача, вывести капитализацию заданного слова.

Обратите внимание, что в капитализации все буквы слова кроме первой остаются не измененными.

Входные данные
В первой строке записано непустое слово. Слово состоит из строчных и прописных букв латинского алфавита. Длина заданного слова не превосходит 103 букв.

Выходные данные
Выведите капитализацию слова.

*/

fscanf(STDIN, '%s\n', $line);

$line = str_split($line, 1); 		// разбиваем строку на массив букв

if($line[0] != ctype_upper($line[0])){
	$line[0] = strtoupper($line[0]);
}

foreach($line as $v){
	printf($v);
}