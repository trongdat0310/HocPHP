<?php
function TinhGiaiThua($a){
    $giaiThua = 1;
    for ($i = 1; $i<=$a; $i++){
        $giaiThua *= $i;
    }
    echo "Giai Thừa của $a là: $giaiThua";
}
print_r(TinhGiaiThua(7));