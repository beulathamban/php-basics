<?php
//finding the greatest among 3 numbers
$a=160;
$b=17.3;
$c=-40;
//comparing a and b only
if ($a>$b) {
	echo "a is greater than b <br>";
} else {
	echo "b is greater than a <br>";
}
$result = ($a>$b)? "A is greater <br>" : "B is greater <br>"; // ternary operator
echo $result;
//comparing a,b,c
if ($a>$b){
	if ($a>$c) {
		echo "a is the greatest <br>";
		} else {
			echo "c is the greatest <br>";
		}
} elseif ($b>$c) {
	echo "b is the greatest <br>";
	} else {
	echo "c is the greatest <br>";
	}
// option selection
$useraction="";
if ($useraction=="open") {
	echo "opening the file <br>";
} elseif ($useraction=="save") {
	echo "saving the file <br>";
} elseif ($useraction=="close") {
	echo "closing the file <br>";
} elseif ($useraction=="logout") {
	echo "logging out the file <br>";
} else {
print "Please choose an option <br>";
}
// using switch
switch ($useraction) {
	case "open":
	echo "opening the file <br>";
	break; // exits out of the switch structure
	case "save":
	echo "saving the file <br>";
	break;
	case "close":
	echo "closing the file <br>";
	break;
	case "logout":
	echo "logging out the file <br>";
	break;
	default :
	print "please choose an option <br>";
}

// code to greet according to time of the day
$hr=date("G");
$yr=2000 /*date("Y")*/;
if ($hr>=5 && $hr<12) {
	echo "Good Morning! <br>";
} elseif ($hr>=12 && $hr<22) {
	echo "Good Evening! <br>";
} else {
	echo "Good Night! <br>";
}
 //check for leap year
if ((($yr %4==0) && ($yr%100 !=0)) || ($yr%400==0))
	$leapYear=true;
echo "Did you know that $yr is " . ($leapYear? "" : " not ") . "a leap year? <br>";


?>