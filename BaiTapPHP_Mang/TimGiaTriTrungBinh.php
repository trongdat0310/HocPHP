<?php
$mang_so_nguyen = [78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 81, 76, 73,
		68, 72, 73, 75, 65, 74, 63, 67, 65, 64, 68, 73, 75, 79, 73];
$tong = 0;
for ($i = 0; $i <= count($mang_so_nguyen) - 1; $i++ ){
    $tong += $mang_so_nguyen[$i];
}
$GiaTriTB = $tong / count($mang_so_nguyen);

echo "$tong / ".count($mang_so_nguyen)."= $GiaTriTB"."<br><br>";

echo "Lúc chưa sắp xếp: ";
foreach ($mang_so_nguyen as $tangdan){
    echo $tangdan." ";
}

echo "<br><br>";

echo "Lúc đã sắp xếp: ";
sort($mang_so_nguyen);

foreach ($mang_so_nguyen as $tangdan){
    echo $tangdan." ";
}

echo "<br><br>";

echo "5 số bé nhất là: ";
for ($i=0; $i<5; $i++){
    echo $mang_so_nguyen[$i]." ";
}

echo "<br><br>";

echo "5 số lớn nhất là: ";
for ($i=count($mang_so_nguyen)-1; $i>count($mang_so_nguyen)-6; $i--){
    echo $mang_so_nguyen[$i]." ";
}