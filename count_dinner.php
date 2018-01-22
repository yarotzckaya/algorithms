<?php

/**
Напишите на PHP программу, вычисляющую общую стоимость трапезы в ресторане, состоящей из двух гамбургеров по 4,95 доллара каждый, одного молочно-шоколадного коктейля за 1,95 доллара и одной порции кока-колы за 0,85 доллара. Ставка налога на добавленную стоимость составляет 7,5%, а чаевые без вычета налогов — 16%.
*/

$firstBurger = 4.95;
$secondBurger = 4.95;
$coctail = 1.95;
$cola = 0.85;

$tax = 0.075;
$bonus = 0.16;

$total = $firstBurger + $secondBurger + $coctail + $cola;
$bonusCounter = $total * $bonus;
$totalWithBonus = $total + $bonusCounter;
$taxCounter = $total * $tax;
$result = $totalWithBonus + $taxCounter;


function check(){

	// prints formatted sum of the whole items

	echo "-------------------------------------------" . "\n";
	echo "Burger(2): " .  $b = ($GLOBALS["firstBurger"] +  $GLOBALS["secondBurger"]) . "\n";
	echo "Coctail: " . $GLOBALS["coctail"] . "\n";
	echo "Cola: " . $GLOBALS["cola"] . "\n";
	echo "Tax: " . $GLOBALS["tax"] . "\n";
	echo "Bonus: " . $GLOBALS["bonus"] . "\n";
	echo "Total: " . round($GLOBALS["result"], 2) . "\n";
	echo "-------------------------------------------";

}

check();

