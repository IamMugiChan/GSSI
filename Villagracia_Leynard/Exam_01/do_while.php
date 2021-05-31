<?php
$x = 0;
$i = 10;
do{
	if($x % 2 == 0){
		echo $x."- is Even<br>";
	}else{
		echo $x."- is not Even<br>";
	}
	$x = $x+1;
}
while($x < $i)
?>