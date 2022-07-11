<?php
function fibonacci($n) {
    if ($n < 0) {
        return - 1;
    } else if ($n == 0 || $n == 1) {
        return $n;
    } else {
        return fibonacci ( $n - 1 ) + fibonacci ( $n - 2 );
    }
}
echo "10 số đầu của dãy số fibonaci là: " ;
for ($i = 0; $i <= 10; $i++){
    echo fibonacci($i) . " ";
}
