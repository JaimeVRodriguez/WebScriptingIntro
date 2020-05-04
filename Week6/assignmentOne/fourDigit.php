<!--
Student: Jaime Rodriguez
Bellevue University
CIS337

fourDigit.php

Assignment 6.2
Purpose: PHP page to display reslt of 
users input from fourDigit.html page.
-->
<!DOCTYPE html> 
<html lang = "en"> 
	<head> 
		<title> 4 Digit Finder </title> 
		<meta charset = "utf-8" /> 
		<link rel="stylesheet" href="fourDigit.css">
	</head> 
	<body> 
		<?php 
		
		function FirstForDigit($string){
			$numbers = explode(" ",$string);
			
			foreach($numbers as $number){
				if(4 == strlen($number)){
					return $number;
				}
			}
			return "FALSE";
		}

		$set_one = $_POST["set_one"]; 
		$set_two = $_POST["set_two"]; 
		$result_one = FirstForDigit($set_one);
		$result_two = FirstForDigit($set_two);
		
		?> 

		<p /> 
		<p /> 
		<h2> First 4 Digit Number </h2>
		<table> 
			<tr> 
				<th> Input Numbers </th>
				<th> Result </th>
			</tr> 
			<tr> 
				<td> <?php print ("$set_one"); ?> </td> 
				<td> <?php print ("$result_one") ?> </td>
			</tr> 
			<tr> 
				<td> <?php print ("$set_two"); ?> </td> 
				<td> <?php print ("$result_two") ?> </td>
			</tr> 
		</table> 
		<p /> <p /> 
	</body> 
</html>