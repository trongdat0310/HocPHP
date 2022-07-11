<?php
    $mang = array(3,5,123,7,13,734,5);
    echo "Trước khi sắp xếp :";
    foreach ($mang as $mangs){
        echo $mangs.", ";
    }

    echo "<br>";

    sort($mang);
    echo "Sau khi sắp xếp :";
    echo "<ul>";
    foreach ($mang as $mangs){
        echo "<li>".$mangs."</li>";
    }
    echo "</ul>";

