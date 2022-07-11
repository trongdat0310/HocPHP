<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>


<!--
Thiết kế dịch vụ chia sẻ xe đạp
Phần 1 Theo dõi xe đạp
Một dịch vụ chia sẻ xe đạp mới, được gọi là SF Bike Share,
muốn theo dõi xe đạp khi chúng đã kiểm tra.
Ví dụ: khi Bike 1 được thanh toán, họ lưu trữ nó trong một mảng,
như: [1]
Và khi nó được trả lại, họ lại lưu trữ nó trong mảng,
như: [1, 1] Nói cách khác, một chiếc xe đạp được trả lại sẽ luôn có
mục thứ hai trong mảng.

Ví dụ:
[1, 2, 7, 2, 1, 1, 1, 2, 1, 2, 1] Có nghĩa là:
Xe đạp 1 đã được kiểm tra và trả lại 3 lần.
Xe đạp 2 đã được kiểm tra và trả lại 2 lần.
Xe đạp 7 đã được cho thuê nhưng vẫn chưa được trả lại.

Viết một hàm trả về tất cả các xe đạp hiện chưa được kiểm tra.
-->


<?php
//    $array = [1, 2, 7, 2, 1, 1, 1, 2, 1, 2, 1, 10, 8, 20];

    function SF_Bike_Share(array $array){
        $xeDap = array_count_values($array);
        $soXeDap = 0;
        // Tìm số xe đạp lớn nhất
        for ($i = 0; $i <= count($array) - 1; $i++){
            if ($array[$i] > $soXeDap){
                $soXeDap = $array[$i];
            }
        }

        //Tìm xem xe nào chưa được trả lại
        for ($i = 0; $i <= $soXeDap; $i++){
            if (isset($xeDap[$i])==true){
                if ($xeDap[$i] % 2 != 0){
                    echo "Xe đạp $i đã cho thuê nhưng chưa trả lại."."<br>";
                } else
                    echo "Xe đạp $i đã được kiểm tra và trả lại " . ($xeDap[$i] / 2) ." lần."."<br>";
            }
        }
    }
    print_r(SF_Bike_Share(array(1, 2, 7, 2, 1, 1, 1, 2, 1, 2, 1, 10, 8, 20)));



?>

</body>
</html>