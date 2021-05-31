<?php
// PHP program to check if
// x is a perfect square
 
// A utility function that
// returns true if x is
// perfect square
function isPerfectSquare($x)
{
    $s = (int)(sqrt($x));
    return ($s * $s == $x);
}
 
// Returns true if n is a
// Fibinacci Number, else false
function isFibonacci($n)
{
    // n is Fibinacci if one of
    // 5*n*n + 4 or 5*n*n - 4 or
    // both is a perferct square
    return isPerfectSquare(5 * $n * $n + 4) ||
           isPerfectSquare(5 * $n * $n - 4);
}
 
// Driver Code

if(!empty($_GET['int'])){
	$seq = htmlspecialchars($_GET['int']);
	//validate if the input is number
	if((int)$seq){
		//proceed
		for ($i = 1; $i <= $seq; $i++)
		if(isFibonacci($i))
		echo "$i is a Fibonacci Number <br>";
		else
		echo "$i is a not Fibonacci Number <br>" ;
	}else{
		echo "Sorry please input a valid number";
	}
	
}else{
	echo "please call the function by sending GET request with the following parameters <b>?int={Int}</b><br> Example: localhost/exam_03/?int=10";
}

 
// This code is contributed by mits
?>