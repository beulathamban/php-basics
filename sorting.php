<?php
$n=array(5,3,4,1,2);
/*// echo $n[3];
for($i=0; $i<=4; $i++) {
	echo $n[i];
	for($j=($i+1); $j<=3; $j++) {
		echo $n[j];
		if ($n[i]>$n[j]) {
			$temp=$n[i];
			$n[i]=$n[j];
			$n[j]=$temp;
			echo $n[i], $n[j];
		}
	}
}
*/
sort($n);
print_r ($n);
echo "<br>";
rsort($n);
print_r ($n);
echo "<br>";
$book=array(
			"title"=>"Java",
			"author"=>"Charles");
//sort($book);
//print_r($book);
echo "<br>";
asort($book);
print_r($book);
echo "<br>";
arsort($book);
print_r($book);
echo "<br>";
ksort($book);
print_r($book);
echo "<br>";
krsort($book);
print_r($book);
echo "<br>";
//array_multisort($a,$b,$c); if $a,$b,$c are all arrays
