<?php

/*
Вася работает диджеем в самом лучшем ночном клубе Берляндии, и часто в своих выступлениях он использует музыку в стиле «дабстеп». Недавно он решил взять несколько старых песен и сделать из них дабстеп-ремиксы.

Пусть песня состоит из некоторого количества слов. Для того, чтобы сделать дабстеп-ремикс этой песни, Вася вставляет некоторое количество слов «WUB» до первого слова песни (возможно нулевое количество), после последнего слова (возможно нулевое количество) и между словами (между любой парой соседних слов песни хотя бы одно слово «WUB»), а затем склеивает все слова, включая «WUB», в одну строку и проигрывает в клубе.

Например, из песни со словами «I AM X» может получиться дабстеп-ремикс «WUBWUBIWUBAMWUBWUBX» и не может получиться дабстеп-ремикс «WUBWUBIAMWUBX».

Недавно Петя услышал новую дабстеп-композицию Васи, но так как он не очень любит современную музыку, то решил понять, из какой же песни Вася сделал свой ремикс. Помогите Пете восстановить оригинал.
*/

fscanf(STDIN, '%s\n', $line);
$word = str_split($line); 	
$counter = count($word) + 3;

for($i = 0; $i < $counter; $i++){
	if($word[$i] == "W" && $word[$i + 1] == "U" && $word[$i + 2] == "B"){
		unset($word[$i], $word[$i + 1], $word[$i + 2]);
		print_r(" ");
	}
	print_r($word[$i]);
}
