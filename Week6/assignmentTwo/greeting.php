<!--
Student: Jaime Rodriguez
Bellevue University
CIS337

greeting.php

Assignment 6.2
Purpose: Page to dissplay a greeting
function that provides a random greeting
from an array of greetings.
-->
<!DOCTYPE html> 
<html lang = "en"> 
	<head> 
		<title> Your Greeting </title> 
		<meta charset = "utf-8" /> 
		<link rel="stylesheet" href="greetingFinal.css">
	</head> 
	<body> 
	<?php
	function GetGreeting(){
		$greetings = array("Good Morning", "Good Afternoon", "Good Evening", "Hello", "What's Up");
		mt_srand ( (double)microtime() * 1000000);
		$number = mt_rand(0, 4);
		return $greetings[$number];
	}

	$page_greeting = getGreeting();
	?>

	<h2> <?php print ("$page_greeting"); ?>  </h2>
	
	</body> 
</html>