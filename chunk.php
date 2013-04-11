<?php
$input_array = array('a', 'b', 'c', 'd', 'e');
$array_array = array(array());
echo '<pre>';
print_r($input_array);
$array_array = array_chunk($input_array, 2);
//echo $input_array[0] .'</br>';
//print_r $input_array;
echo $array_array[0][1];
print_r(array_chunk($input_array, 2));
print_r(array_chunk($input_array, 2, true));

?>