<?php 
$arr = ['red','blue','black','red','blue','blue','red','gold'];
// build an array that "counts" each instance/entry
$count = array();
foreach ($arr as $key) {
    if (!isset($count[$key])) $count[$key] = 0;
    $count[$key]++;
}
// sort the counted array in reverse order (to be "descending")
arsort($count, SORT_NUMERIC);

// copy each of the keys of `$count`, in-order, into a new array
$sorted = array();
foreach ($count as $key=>$count) $sorted[] = $key;

print_r($sorted);
?>