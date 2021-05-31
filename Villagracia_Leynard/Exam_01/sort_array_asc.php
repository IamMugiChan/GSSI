<?php 
$arr = [9863,7127,2020,80,131,55,100];
$new = [];
$value = "";
for ($x = 0; $x < sizeof($arr); $x++) {
	#echo $arr[$x]."<br>";
	if ($arr[$x] % 2 == 0) {
		array_push($new, $arr[$x]);
	}else{
		//round
		array_push($new, round($arr[$x], 1));
	}
}
print_r($new);
?>