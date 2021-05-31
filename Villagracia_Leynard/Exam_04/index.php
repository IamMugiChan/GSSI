<?php 

//ask for input
if(!empty($_GET['from_date']) && !empty($_GET['to_date'])){
	$date1 =htmlspecialchars($_GET['from_date']);
	$date2 = htmlspecialchars($_GET['to_date']);
	//format date
	$date1 = date("Y-m-d",strtotime($date1));
	$date2 = date("Y-m-d",strtotime($date2));

	if($date1 > $date2){
		//
		echo "Please make sure you've input the correct date sequence";
	}else{

		$diff = abs(strtotime($date2) - strtotime($date1));

		$years = floor($diff / (365*60*60*24));
		$months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
		$days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));

		printf("%d years, %d months, %d days\n", $years, $months, $days);
	}
}else{
	echo "please call the function by sending GET request with the following parameters <b>?from_date={Y-m-d}&to_date={Y-m-d}</b><br> Example: localhost/exam_03/?int=10";
}

?>