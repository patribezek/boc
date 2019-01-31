<?php
// 29ENE2019




// Grid chances
$chances = 1;



$random = rand ( 0 , 1000 );	

switch ($random) {
	case 0:
	$result = "<p>Good Luck! You earned +1 chance!</p>";
	$chances --;
	$chances ++;
	break;
	case 1:
	$result = "<p>Good Luck! You earned +3 chance!</p>";
	$chances --;
	$chances += 3;
	break;
	case 2:
	$result = "<p>Good Luck! You earned +5 chances!</p>";
	$chances --;
	$chances += 5;
	break;
	case 3:
	$result = "<p><b>You earned 5 satoshi! </b></p>";
	$chances --;
	break;
	case 4:
	$result = "<p><b>You earned 10 satoshi! </b></p>";
	$chances --;
	break;
	case 5:
	$result = "<p><b>You earned 30 satoshi! </b></p>";
	$chances --;
	break;
	case 6:
	$result = "<p><b>You earned 50 satoshi! </b></p>";
	$chances --;
	break;
	case 7:
	$result = "<p><b>You earned 1 Bit! </b></p>";
	$chances --;
	break;
	default:
	$result = "<p>You earned 1 satoshi! </p>";
	$chances --;
}

// var_dump($chances);






