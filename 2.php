<?php

function hitungKembalian($belanja,$uang){
    $uangdata = [50000,20000,10000,5000,2000,1000,500];
    $kembalian = $uang-$belanja;
    for ($i=0; $i < count($uangdata) ; $i++) { 
        $d = 0;
        while($kembalian >= $uangdata[$i]){
            $kembalian = $kembalian-$uangdata[$i];
            $d++;
        }
        if($d>0){
            echo 'kembalian '.$uangdata[$i].' ada '.$d.'<br>';
        }
          
    }
        echo "disumbangkan: ".$kembalian;
}

hitungKembalian(110500,200000);
?>
