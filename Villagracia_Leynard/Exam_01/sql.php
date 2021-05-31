<?php 
$query = "SELECT salary,name FROM emloyees as emp INNER JOIN salary as sal ON emp.id = sal.id; ORDER BY emp.id"

if(mysqli_num_row($query)>0){
	while ($row = mysqli_fetch_array($query)) {
		$employee = $row['name'];
	}
	echo $employee;
}	

?>