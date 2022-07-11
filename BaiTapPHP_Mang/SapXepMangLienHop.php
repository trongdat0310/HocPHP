<?php
echo "1. Sắp xếp tăng dần theo value: "."<br>";
$array1 = array("Dat" => "10", "Tran" => "12", "Huy" => 6);
asort($array1);
foreach ($array1 as $ten => $ten_value){
    echo "Tuổi của $ten là $ten_value"."<br>";
}
echo "<br>"."<br>";

echo "2. Sắp xếp tăng dần theo key: "."<br>";
ksort($array1);
foreach ($array1 as $ten => $ten_value){
    echo "Tuổi của $ten là $ten_value"."<br>";
}
echo "<br>"."<br>";

echo "3. Sắp xếp giảm dần theo value: "."<br>";
arsort($array1);
foreach ($array1 as $ten => $ten_value){
    echo "Tuổi của $ten là $ten_value"."<br>";
}
echo "<br>"."<br>";

echo "4. Sắp xếp giảm dần theo key: "."<br>";
krsort($array1);
foreach ($array1 as $ten => $ten_value){
    echo "Tuổi của $ten là $ten_value"."<br>";
}
echo "<br>"."<br>";

