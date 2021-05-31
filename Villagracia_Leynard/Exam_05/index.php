<?php 
if(!empty($_GET['string'])){
	$string = htmlspecialchars($_GET['string']);
	echo "Reverse string of $string is: " .strrev ( $string );  

}else{
	 echo "please call the function by sending GET request with the following parameters <b>?string={Your Text}</b><br> Example: localhost/exam_01/?string=Bob";
}

?>