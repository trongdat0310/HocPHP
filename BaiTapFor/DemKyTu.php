<?php
$chuoi = "Phi Trong Dat";
function DemKyTu ($kyTu, $array){
    $soLan = 0;
    for ($i = 0; $i <= strlen($array); $i++){
        if (substr($array,$i,1) == $kyTu){
            $soLan++;
        }
    }
    echo "Có $soLan lần ký tự $kyTu xuất hiện trong chuỗi $array";
}
print_r(DemKyTu("a", "aaaaaaa"));