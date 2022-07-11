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
    <form action="" method="POST" >
        Tên đăng nhập: <input type="text" value="" name="tendangnhap">
        Mật khẩu: <input type="password" value="" name="matkhau">
        <input type="submit" value="Đăng nhập">
    </form>
    <?php
        
        if (isset($_POST["tendangnhap"]) && isset($_POST["matkhau"])){
            $tenDangNhap = $_POST["tendangnhap"];
            $matKhau = $_POST["matkhau"];
            echo "Chúc mừng ".$tenDangNhap." đã đăng nhập thành công"."<br>"."<br>";

        }
        echo "Thông tin User Agent bạn đang sử dụng là: " .$_SERVER['HTTP_USER_AGENT']."<br>"."<br>";

        $ten_file_hien_tai = basename($_SERVER['PHP_SELF']);
        echo "Tên file hiện tại là: $ten_file_hien_tai"."<br>"."<br>";

        $url = 'https://vietjack.com/bai-tap-php/lay-url-trong-php.jsp';
        $url=parse_url($url);
        echo 'Scheme : '.$url['scheme']."<br>";
        echo 'Host : '.$url['host']."<br>";
        echo 'Path : '.$url['path']."<br>"."<br>";

        $text = 'VietJack Team';
        $text = preg_replace('/(\b[a-z])/i','<span style="color:red;">\1</span>',$text);
        echo $text."<br>"."<br>";

        if (!empty($_SERVER['HTTPS'])) {
            echo 'Trang được gọi từ https'."<br>"."<br>";
        }
        else {
            echo 'Trang được gọi từ http'."<br>"."<br>";
        }

//      1redirect
    //        header('Location: https://vietjack.com/');
    ?>
</body>
</html>