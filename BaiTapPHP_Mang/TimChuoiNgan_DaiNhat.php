<?php
$chuoi = array("Phi Trong Dat","Dang Hai Dang","Hoang Bao Tran", "Ninh Quang Duan");
$doDai = array_map("strlen", $chuoi);
echo "Độ dài ngắn nhất của chuỗi là: " . min($doDai) . "<br>";
echo "Độ dài dài nhất của chuỗi là: " . max($doDai);