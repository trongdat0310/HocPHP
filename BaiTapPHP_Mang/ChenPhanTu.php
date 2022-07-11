<?php
$mang = array(3,5,123,7,13,734,5);
echo "Mảng ban đầu là: "."<br>";
foreach ($mang as $x){
    echo "$x ";
}
echo "<br>";
$phan_tu_can_chen = '$';
//Chèn
array_splice($mang,3,0, $phan_tu_can_chen);
echo "Sau khi chèn phần tử '$' thì mảng sẽ như sau: "."<br>";
foreach ($mang as $x)
{
    echo "$x ";
}
echo "<br>";