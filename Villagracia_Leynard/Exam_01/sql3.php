<?php 
$query = "SELECT name,date_hired,department FROM emloyees as emp INNER JOIN departments as dep ON emp.id = dep.id; AND dep.date_hired LIKE '%2018%'"

if(mysqli_num_row($query)>0){
	while ($row = mysqli_fetch_array($query)) {
		$employee = $row['name'];
		echo $employee;
	}
	
}	

?>