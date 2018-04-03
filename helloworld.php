<html>
<head>
	<link rel="stylesheet" type="text/css" href="common.css" />
</head>
<body>
<h1>
<?php
// displaying current date and time 
$curtime=date(" M j, Y g:i:s a");
echo "hello! The current date and time is   $curtime<br>";
// display result using literals
echo 45+55; //simple expresssion using literals
// store value in variable name
$n; // simple declaration although php is a loosely typed language: refer to advantage and diadvantage
$n=5; // initializing a variable
echo "<br> n=$n <br>";
// variable n as integer
echo "the data type of n is " , gettype($n)."<br>";
// change datatype of n to string
settype($n,"string");
echo "now the data type of n is ", gettype($n)."<br>";
// change n to boolean
settype($n,"boolean");
echo " since we have set n to boolean the value is " , $n."<br>";
// type casting using int or integer, float, bool or boolean, string
$nn=52.8;
echo (int)$nn."<br>";
echo intval($nn)."<br>";
echo $n+$nn; //simple expression using variables
echo "<br>";
echo is_float($nn);//returns true 
echo "<br>";
echo is_int($nn); //returns false
// arithmetic operators
$x=10;
$y=2;
echo "<br>", $x+$y; //addition
echo "<br>" , $x-$y; //subtraction
echo "<br>" , $x*$y; //multiplicaiton
echo "<br>" , $x/$y; //division
echo "<br>" , $x%$y; //modulus
echo "<br>" , $x%3; //returns reminder 
//relational or comparison operator
echo "<br>" , $x>$y; //greater than 
echo "<br>" , $y>$x; //returns false
echo "<br>" , $y<$x; //lesser than .....returns true
echo "<br>" , $y<=$x; //lesser than or equal to .....returns true
echo "<br>" , $y==$x; //returns false
echo "<br>" , $y<>$x; //not equal....returns true..can use !=
echo "<br>" , $x=="10"; // checks for euaivalent after converting type 
echo "<br>" , $x==="10"; // checks if identical type and then equivalent
// pre, post increment and decrement
echo "<br>";
$p=$x++;
echo "<br>", $p; //post increment 
$p=++$x;
echo "<br>", $p; //pre increment
$p=$x--;
echo "<br>", $p; //post decrement
$p=--$x;
echo "<br>", $p; //pre decreement
//logical operators
$a=true;
$b=false;
echo "<br>" , $a&&$b; //can use "and" operator but has low precedence than assignment operator, so stick on to &&
echo "<br>" , $a||$b; //can use "or" operator but has low precedence than assignment operator, so stick on to ||
echo "<br>" , !$b; //not operator
//concatenation operator
echo "<br>shaken,"."not stirred";
/*precedence of operators
//increment/decremnet
//type casting - int, float, string, array, object, bool, 
// not operator
//multiplicaiton, division, modulus
//addition, subtraction, concatenation operator
// comparison - less, less than or equal, greater, greater than or equal, not eual
// comparison - equal, not equal, identical, not identical
//logical - &&, ||
//assignment operator - equal, +=, -=, *=, /=, .=, %=
// logical - and, xor, or */
define ("PI","3.14"); // constant 
echo "<br>" . PI;
//properties of circle
$r=5;
echo "<br> the radius of circle is $r";
echo "<br> the diameter of circle is " .  $r*2;
echo "<br> the circumference of circle is " .  2*PI*$r;
echo "<br> the area of circle is " .  PI*$r*$r;
//string function
$txt="Madam";
echo "<br>" . strrev($txt);
//conditional statement  or decision making .....check for palindrome
if ($txt==strrev($txt)) {
 echo " <br>given string is palindrome";
} else {
	echo "<br> given string is not palindrome";
}

?>
</h1>
</body>
</html>
