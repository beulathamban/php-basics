<?php
error_reporting(E_ALL);
$name="David";
$surname="Johnson";
echo "Hello, $name  $surname";
$a=5.5 +6.7;
echo "<br>$a";
var_dump($a);
	
$newname=$name . $surname;
echo "<br>$newname <br>";
$login=true;
echo "login is $login<br>";
var_dump($login);
$stud=array("carrey" ,"florence");
var_dump($stud);
echo "<br>$stud[1]";
$x=$login?1:0;
echo "<br>$x";
$andd=$a&&$login;
echo "<br>$andd";
$login =!($login);
echo "<br>$login";
?>
