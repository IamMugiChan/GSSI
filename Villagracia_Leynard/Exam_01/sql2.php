<?php 
$query = "SELECT * FROM employees WHERE date_hired LIKE '%2017%' OR date_hired LIKE '%2018%'";

if(mysqli_num_row($query)>0){
	while ($row = mysqli_fetch_array($query)) {
		$employee = $row['name'];
		echo $employee;
	}
	
}	

?>