<?php
    $a = 0;
    $b = 0;
    $c = 3;
    $delta = $b*$b-4*$a*$c;
    if($a==0){
        if ($b==0){
            echo "Phương trình vô nghiệm";
        }else {
            $x1 = (-$c/$b);
            echo "Phương trình có một nghiệm -c/b = "."$x1";
        }
    }
    elseif ($delta < 0){
        echo "Phương trình vô nghiệm";
    }elseif ($delta = 0){
        $x1 = $x2 = (-$b/2*$a);
        echo "Phương trình có nghiệm kép -b/2a = "."$x1";
        // echo "Phương trình có nghiệm kép";
    }else{
        $x1 = (- $b + sqrt ( $delta )) / (2 * $a);
        $x2 = (- $b - sqrt ( $delta )) / (2 * $a);
        echo "Phương trình có 2 nghiệm phân biệt: x1 = "."$x1"."  "."x2 = "."$x2";
        // echo "Phương trình có 2 nghiệm phân biệt";
    }
?>