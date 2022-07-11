<?php
//Vòng lặp bên ngoài dùng để lặp số dòng
//VÒng lặp bên trong dùng để lặp số sao trên 1 dòng
for ($i = 0; $i <=10; $i++) {
    for ($j = 10 - $i; $j <= 10; $j++) {
        echo "*";
    }
    echo "<br>";
}
for ($i = 0; $i <=10; $i++){
    for ($j = 0; $j <= 10-$i; $j++){
        echo "*";
    }
    echo "<br>";
}