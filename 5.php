<?php 
function generate($l){
    $tokens = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
    for ($k = 0; $k < $l; $k++) {
    for ($i = 0; $i < 4; $i++) {
        for ($j = 0; $j < 4; $j++) {
            $serial .= $tokens[rand(0, 35)];
        }
    
        if ($i < 3) {
            $serial .= '-';
        }
      if ($i == 3) {
        $serial .= "<br>";
        }
      
    }
    
    }
    echo $serial;
}
generate(3);
?>
