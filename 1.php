<?php 
$hitung = array(1,2,3,4,5);
$hasil0 = $hitung[1]+$hitung[2]+$hitung[3]+$hitung[4];
$hasil1 = $hitung[0]+$hitung[2]+$hitung[3]+$hitung[4];
$hasil2 = $hitung[0]+$hitung[1]+$hitung[3]+$hitung[4];
$hasil3 = $hitung[0]+$hitung[1]+$hitung[2]+$hitung[4];
$hasil4 = $hitung[0]+$hitung[1]+$hitung[2]+$hitung[3];
echo "angka".$hitung[0].": ".$hitung[1]."+".$hitung[2]."+".$hitung[3]."+".$hitung[4]."=".$hasil0;
echo "<br>";
echo "angka".$hitung[1].": ".$hitung[0]."+".$hitung[2]."+".$hitung[3]."+".$hitung[4]."=".$hasil1;
echo "<br>";
echo "angka".$hitung[2].": ".$hitung[0]."+".$hitung[1]."+".$hitung[3]."+".$hitung[4]."=".$hasil2;
echo "<br>";
echo "angka".$hitung[3].": ".$hitung[0]."+".$hitung[1]."+".$hitung[2]."+".$hitung[4]."=".$hasil3;
echo "<br>";
echo "angka".$hitung[4].": ".$hitung[0]."+".$hitung[1]."+".$hitung[2]."+".$hitung[3]."=".$hasil4;
echo "<br>";
echo "nilai terbesar: ".max($hasil0,$hasil1,$hasil2,$hasil3,$hasil4);
echo "<br>";
echo "nilai terkecil: ".min($hasil0,$hasil1,$hasil2,$hasil3,$hasil4);
?>
