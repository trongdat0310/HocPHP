<?php
$mang_lien_hop = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg",
    "Belgium"=> "Brussels", "Denmark"=>"Copenhagen",
    "Finland"=>"Helsinki", "France" => "Paris",
    "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana",
    "Germany" => "Berlin", "Greece" => "Athens",
    "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam",
    "Austria" => "Vienna", "Poland"=>"Warsaw");
$key = array_keys($mang_lien_hop);
echo max($key);