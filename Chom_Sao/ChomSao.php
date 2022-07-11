<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Bạn thuộc chòm sao gì?</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php
$day = "";
$mon = "";

$image = "";
$name = "";
$time = "";
$flagShow = "";
if (isset($_POST["day"]) && isset($_POST["mon"])){
    $day = $_POST["day"];
    $mon = $_POST["mon"];
    $flagShow = true;
    if (is_numeric($day) && is_numeric($mon))
    switch ($mon){
        case 1:
            if ($day <= 19) {
                $image = "capricorn"; $name = "Ma Kết"; $time = "21/12 - 19/01";
            }
            if ($day >= 20) {
                $image = "aquarius"; $name = "Bảo Bình"; $time = "20/01 - 19/02";
            }
//            if($day < 1 || $day > 31) $flagShow	= false;
            break;
            case 2:
            if ($day <= 19) {
                $image = "aquarius"; $name = "Bảo bình"; $time = "20/01 - 19/02";
            }
            if ($day >= 20) {
                $image = "pisces"; $name = "Song Ngư"; $time = "20/02 - 21/03";
            }
//            if($day < 1 || $day > 29) $flagShow = false;
            break;
            case 3:
            if ($day <= 21) {
                $image = "pisces"; $name = "Song Ngư"; $time = "20/02 - 21/03";
            }
            if ($day >= 22) {
                $image = "aries"; $name = "Bạch Dương"; $time = "22/03 - 20/04";
            }
//            if($day < 1 || $day > 31) $flagShow	= false;
            break;
            case 4:
            if ($day <= 20) {
                $image = "pisces"; $name = "Song Ngư"; $time = "20/02 - 21/03";
            }
            if ($day >= 21) {
                $image = "taurus"; $name = "Kim Ngưu"; $time = "21/04 - 21/05";
            }
//            if($day < 1 || $day > 30) $flagShow	= false;
            break;
            case 5:
            if ($day <= 21) {
                $image = "taurus"; $name = "Kim Ngưu"; $time = "21/04 - 21/05";
            }
            if ($day >= 22) {
                $image = "gemini"; $name = "Song Tử"; $time = "22/05 - 22/06";
            }
//            if($day < 1 || $day > 31) $flagShow	= false;
            break;
            case 6:
            if ($day <= 22) {
                $image = "gemini"; $name = "Song Tử"; $time = "22/05 - 22/06";
            }
            if ($day >= 23) {
                $image = "cancer"; $name = "Cự Giải"; $time = "23/06 - 23/07";
            }
//            if($day < 1 || $day > 30) $flagShow	= false;
            break;
            case 7:
            if ($day <= 23) {
                $image = "cancer"; $name = "Cự Giải"; $time = "23/06 - 23/07";
            }
            if ($day >= 24) {
                $image = "leo"; $name = "Sư Tử"; $time = "24/07 - 23/08";
            }
//            if($day < 1 || $day > 31) $flagShow	= false;
            break;
            case 8:
            if ($day <= 23) {
                $image = "leo"; $name = "Sư Tử"; $time = "24/07 - 23/08";
            }
            if ($day >= 24) {
                $image = "virgo"; $name = "Xử Nữ"; $time = "24/08 - 23/09";
            }
//            if($day < 1 || $day > 31) $flagShow	= false;
            break;
            case 9:
            if ($day <= 23) {
                $image = "virgo"; $name = "Xử Nữ"; $time = "24/08 - 23/09";
            }
            if ($day >= 24) {
                $image = "libra"; $name = "Thiên Bình"; $time = "24/09 - 23/10";
            }
//          if($day < 1 || $day > 30) $flagShow	= false;
            break;
            case 10:
            if ($day <= 23) {
                $image = "libra"; $name = "Thiên Bình"; $time = "24/09 - 23/10";
            }
            if ($day >= 24) {
                $image = "scorpio"; $name = "Bọ Cạp"; $time = "24/10 - 22/11";
            }
//            if($day < 1 || $day > 31) $flagShow	= false;
            break;
            case 11:
            if ($day <= 22) {
                $image = "scorpio"; $name = "Bọ Cạp"; $time = "24/10 - 22/11";
            }
            if ($day >= 23) {
                $image = "sagittarius"; $name = "Nhân Mã"; $time = "23/11 - 22/12";
            }
//            if($day < 1 || $day > 30) $flagShow	= false;
            break;
            case 12:
            if ($day <= 22) {
                $image = "sagittarius"; $name = "Nhân Mã"; $time = "23/11 - 22/12";
            }
            if ($day >= 23) {
                $image = "capricorn"; $name = "Ma Kết"; $time = "21/12 - 19/01";
            }
//            if($day < 1 || $day > 31) $flagShow	= false;
            break;
        default:
            ;
            break;

//        if($flagShow == true){
//            $result = '<div class="result">
//                        <img src="images/' . $image . '.jpg" alt="' . $image . '" />
//                        <p>' . $name . ' <span>('. ucfirst($image) .' : ' . $time . ')</span></p>
//                    </div>';
//        } else {
//            $result = "Dữ liệu không hợp lệ";
//        }
    }
//else {
//        $flagShow	= false;
//        $result = "Dữ liệu không hợp lệ";
//    }
}
?>
<div class="content">
    <h1>Bạn thuộc chòm sao gì?</h1>
    <form class="form" action="" method="post" >
        <div class="row">
            <span>Ngày sinh</span>
            <input type="text" name="day" value="<?php echo $day ?>"/>
        </div>

        <div class="row">
            <span>Tháng sinh</span>
            <input type="text" name="mon" value="<?php echo $mon ?>"/>
        </div>

        <div class="row">
            <input type="submit" value="Lấy chòm sao!" />
        </div>
    </form>
        <div class="result">
            <img src="image/<?php echo $image ?>.jpg" alt="<?php echo $image ?>" />
            <p><?php echo $name?><span>(<?php echo ucfirst($image) ?> : <?php echo $time ?> )</span></p>
        </div>
</div>
</body>
</html>