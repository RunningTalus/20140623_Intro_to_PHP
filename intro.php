<html>
<body>
<?php
	
	//1
	
	// print "This text comes from PHP!";
	

	//2

	// $msg = "This is text";
	// $mynum = 5 + 1;
	// $msg = $msg . " and a number: " . $mynum;
	// print $msg

	//prints out "This is text and a number: 6"


	//3

	//query string: localhost/intro.php?msg=Hello+there&num=42
	//$_GET is an associative array	
	
	// if ($_GET["msg"] != "" && $_GET["num"] != "") {
	// 	$msg = $_GET["msg"];
	// 	$mynum = $_GET["num"];
	// 	print "Your message is " . $msg . " and your number is " . $mynum;
	// }

	// paste in the query string above and hit enter
		// prints the following out "Your message is Hello there and your number is 42"
	
	//4
	
	//paste in url + query string: localhost/intro.php?msg=Hello+there&num=42
	
	// $mynum = $_GET["num"];
	// if (is_numeric($mynum)) {
	// if ($mynum < 10) {
	// 	print "Your number is less than 10!";
	// }
	// else {
	// 	print "You have double digits!";
	// }
	// }	

	//prints "You have double digits!"
	
	//5
	
	//http://localhost/intro.php
	
	// $beatles = array("John", "Paul", "George", "Ringo");

	// print $beatles[2];
		//prints George
	
	//6

	// $beatles = array("singer" => "John", "bassist" => "Paul", "guitarist" => "George", "drummer" => "Ringo");

	// print $beatles["guitarist"];
	// print $beatles["bassist"];
	// print $beatles["drummer"];
	// print $beatles["singer"];
	
	//7
	
	// $bandmates = array("Simon", "Garfunkel");
	// // $bandmates = array("Ketch Secor", "Willie Watson", "Critter Fuqua", "Ben Gould", "Matt Kinman", "Kevin Hayes", "Morgan Jahnig", "Gil Landry", "Chance McCoy", "Cory Younts");

	// $upperBound = count($bandmates) - 1;
	// for ($idx = 0; $idx <= $upperBound; $idx++) {
	// 	print $bandmates[$idx];
	// 	if ($idx < $upperBound) {
	// 		print " and ";
	// 	}
	// }


	// 8
	
	// $bandhair = array("straight" => "Simon", "curly" => "Garfunkel");
	// 	foreach ($bandhair as $description => $name){
	// 		print $name . " has " . $description . " hair. ";
	// 	}
	

	// 9
	
	// function quadruple ($somenum){
	// 	$newnum = $somenum * 4;
	// 	print $newnum;
	// }

	// quadruple(4);
	

	// 10
	
	$allnums = array(4, 18, 21);
	foreach ($allnums as $thisnum) {
		$quadnum = quadruple($thisnum);
		print $thisnum . " quadrupled is " . $quadnum . "! ";
	}

	function quadruple ($somenum){
		$newnum = $somenum * 4;
		return $newnum;
	}

	//prints 4 quadrupled is 16! 18 quadrupled is 72! 21 quadrupled is 84!


?>
</body>
</html>