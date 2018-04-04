<?php
//use of single and double quotes
/*$txt="Hello";
echo "$txt<br>";// double quotes process the variable 
echo '$txt<br>'; // single quotes do not process 
echo "<pre> $txt\tthere \n </pre>";
echo "$txt<br>";// double quotes process the variable 
echo "I have $50";
$money=100;
echo "<br>I have \$ $money ";
echo "<br> It's mine<br>"; // use escape character as below
echo "<br> It\'s mine<br>"; */
$fruit="green mangoe";
echo "I like {$fruit}s <br>"; //  processes the variable and adds s at the end 
echo strlen($fruit) . "<br>"; // finds the length of string in number of characters
echo str_word_count($fruit) . "<br>"; // counts the number of words in the string
echo substr ($fruit, 6) . "<br>"; // extracts string from the 6th position strting from 0
echo substr ($fruit, 6, 3) . "<br>"; // extracts  3 characters from the 6th position strting from 0
echo substr ($fruit, -3,2) . "<br>"; //extracts 2 characters from the reverse order at position 3 
echo $fruit[1], "<br>";
echo strstr($fruit, "man")? "yes" :"no" , "<br>" ;
echo str_replace("green","red",$fruit), "<br>";
echo strtolower($fruit), "<br>";
echo strtoupper($fruit), "<br>";
?>
