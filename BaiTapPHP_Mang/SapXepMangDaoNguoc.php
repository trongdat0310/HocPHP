<?php
$mang_so_nguyen = [78, 60, 62, 68, 71, 68, 73];
$soPhanTuMang = count($mang_so_nguyen);

for ($i = 0; $i <= ($soPhanTuMang - 1); $i++){
    echo $mang_so_nguyen[$i]." ";
}
echo "<br>";

$daoMang = array_reverse($mang_so_nguyen);


for ($i = 0; $i <= ($soPhanTuMang - 1); $i++){
    echo $daoMang[$i]." ";
}