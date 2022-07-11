<?php
$mang_lien_hop = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg",
    "Belgium"=> "Brussels", "Denmark"=>"Copenhagen",
    "Finland"=>"Helsinki", "France" => "Paris",
    "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana",
    "Germany" => "Berlin", "Greece" => "Athens",
    "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam",
    "Austria" => "Vienna", "Poland"=>"Warsaw");

// Sắp xếp mảng liên hợp
asort($mang_lien_hop);

//In tên quốc gia và thủ đô
foreach ($mang_lien_hop as $contry => $capital){
    echo "Thủ đô của $contry là $capital"."<br>";
}