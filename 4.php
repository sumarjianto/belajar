<?php
function hitungBarang($kualitas,$qty){
    if ($kualitas == 'A'){
        if ($qty>10){
            $total = 3000*$qty;
            $potongan = 500*$qty;
            $bayar = $total-$potongan;

            echo "Total harga barang: ".$total;
            echo "<br>";
            echo "Potongan: ".$potongan;
            echo "<br>";
            echo "Total yang harus dibayar: ".$bayar;
        
        } else {
            $toal = 3000*$qty;
            echo "Total harga barang: ".$toal;
            echo "<br>";
            echo "Total yang harus dibayar: ".$toal;
        };
     } elseif ($kualitas =='B'){
        if ($qty>5){
            $total = 3500 * $qty;
            $potongan = $total*(50/100);
            $bayar = $total-$potongan;

            echo "Total harga barang: ".$total;
            echo "<br>";
            echo "Potongan: ".$potongan;
            echo "<br>";
            echo "Total yang harus dibayar: ".$bayar;
        } else {
            $total = 3500*$qty;
            echo "Total harga barang: ".$total;
            echo "<br>";
            echo "Total yang harus dibayar: ".$total;
        };
    } elseif ($kualitas == 'C'){
        $total = 5000 * $qty;
        echo "Total harga barang: ".$total;
        echo "<br>";
        echo "Total yang harus dibayar: ".$total;
    };

};

hitungBarang("A",11);
?>
