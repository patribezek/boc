<?php
// 28DEC2018
// psychoBrezel


$usr_email = "yourname@example.com";


// cut email reference to get the nick of the user
$user = substr($usr_email, 0, strpos($usr_email, '@'));

// Random grid


// Grid chances
$chances = 1;

$random = rand ( 0 , 10 );	


switch ($random) {
	case 0:
	$result = "<p >Sorry, try again :-(</p>";
	$chances --;
	break;
	case 1:
	$result = "<p>Good Luck! You earned +1 chance!</p>";
	
	break;
	case 2:
	$result = "<p>Good Luck! You earned +3 chances!</p>";
	$chances --;
	$chances += 3;
	break;
	case 3:
	$result = "<p>Good Luck! You earned +5 chances!</p>";
	$chances --;
	$chances += 5;
	break;
	case 4:
	$result = "<p>Good Luck! You earned +10 chances!</p>";
	$chances --;
	$chances += 10;
	break;
	case 5:
	$result = "<p><b>Yeah! You earned 1 seed!</b></p>";
	$chances = 0;
	break;
	case 6:
	$result = "<p><b>Yeah! You earned 3 seeds!</b></p>";
	$chances = 0;
	break;
	case 7:
	$result = "<p><b>Yeah! You earned 5 seeds!</b></p>";
	$chances = 0;
	break;
	default:
	$result = "<p>Sorry, try again :-(</p>";
	$chances --;
}

 var_dump($chances);






