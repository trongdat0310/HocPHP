<?php
$array1 = array(array(12, 37), array(21, 35));
$array2 = array("vietjack", "team");
function ham_hop_mang_theo_index($x, $y)
{
    $temp = array(); $temp[] = $x;
    if(is_scalar($y))
    {
        $temp[] = $y;
    }
    else
    {
        foreach($y as $k => $v)
        {
            $temp[] = $v;
        }
    }
    return $temp;
}
echo '<pre>'; print_r(array_map('ham_hop_mang_theo_index',$array2, $array1));
?>