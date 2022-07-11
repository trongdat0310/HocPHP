<?php
    function Giaithua($n){
        $giaithua = 1;
        if ($n == 0 || $n == 1){
            return $giaithua;
        } else{
            for ($i = 2; $i<$n; $i++){
                $giaithua *= $i;
            } return $giaithua;
        }
    }
    
