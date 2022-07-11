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
    <table width="270px" border="1px">
        <?php
            for ($row = 1; $row <= 8; $row++) {
                echo "<tr>";
                for ($col = 1; $col <= 8; $col++) {
                    $total = $row + $col;
                    if ($total % 2 == 0) {
                        echo "<td height=30px width=30px bgcolor=#FFFFFF></td>";
                    } else
                        echo "<td height=30px width=30px bgcolor=#000000></td>";
                }
                echo "</tr>";
            }
        ?>
    </table>

</body>
</html>

