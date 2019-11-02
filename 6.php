<?php 
// multidimensional array?
$array = array('a','c','b','e','d');
$jumlah = count($array);
for ($i = 0; $i < $jumlah; $i++) {
    for ($j = $i + 1; $j < $jumlah; $j++) {
        if ($array[$i] > $array[$j]) {
            $temp = $array[$i];
            $array[$i] = $array[$j];
            $array[$j] = $temp;
        }
    }
}
print_r($array);
?>
