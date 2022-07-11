<table border="1px">
    <tr>
        <?php
            for($i=1;$i<=10;$i++){
                echo "<td>";
                echo "$i";
                echo "</td>";
            }
        ?>
    </tr>
    <tr>
        <?php
            for($i=1;$i<=10;$i++){
                echo "<td>";
                for($j=1;$j<=10;$j++){
                    echo "$i * $j = ".($i*$j);
                    echo "<br>";
                }
                echo "</td>";
            }
        ?>
    </tr>
</table>