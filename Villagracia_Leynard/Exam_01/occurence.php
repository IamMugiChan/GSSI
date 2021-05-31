<?php 
$arr = ['Marvin','Marco','Marvin','Marco','Marco','Christian'];
// build an array that "counts" each instance/entry
$array = array_count_values($arr); //get all occurrences of each values
arsort($array);
//print_r($array);//print occurrences array
$final_array = array();

foreach($array as $key=>$val){ // iterate over occurrences array
  for($i=0;$i<$val;$i++){ //apply loop based on occurrences number
    $final_array[] = $key; // assign same name to the final array
  }
}

print_r($final_array); // print final array
?>