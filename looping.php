<?php
//while loop
$i=1;
while ($i<=10) {
	echo " $i. Hello <br>";
	$i++;
	// illustration of break and continue
	/*if ($i==5) 
		break;
	else
		continue; 
		echo "this sentence will not be printed";*/
}
//do while.... executes atleast one time even if the condition is not true
$j=11;
do {
	echo " $j. Hello <br>";
}while ($j<=10);

// another example
/*$answer=false;
do {
	echo "hello<br>";
	$answer=false;
}while ($answer=true); */
// looping structure for counting
for ($m=0; $m<=20; $m++) {
	echo "$m*4=" . $m*4 . "<br>";
}
// not necessary to count with for loop
$startTime = microtime (true);
for ($num=1; microtime (true) < $startTime + 0.00001; $num =$num *2) {
	echo "Current number : $num <br>";
}
echo "Out of time! <br>"; 
//nested loops
for ($stud=1; $stud<=12; $stud++){
	for ($mod=1; $mod<=4; $mod++){
		echo "student number is $stud and module number is $mod <br>";
	}
}
//multidimensional array
for ($stud=1; $stud<=12; $stud++){
	for ($mod=1; $mod<=4; $mod++){
		echo "(Mark[$stud,$mod], Attendance[$stud,$mod] <br>";
	}
}
//fibonacci sequence
$f1=0;
$f2=1;
$f3=$f1+$f2;
echo $f1," ", $f2, " ", "$f3<br>";
while ($f3<=50){
	$f1=$f2;
	$f2=$f3;
	$f3=$f1+$f2;
	echo $f1," ", $f2, " ", "$f3<br>";
}
for ($u=1; $u<=20;$u=$u+2){
for($v=1;$v<=$u;$v++){
	echo "*";
}
echo "<br>";
}
?>