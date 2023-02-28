<html>
<head></head>
<body>
<table>
    <?php
        for($i=1;$i<=4;$i++){
        echo "<tr>";
        for($j=1;$j<=4;$j++) {
            echo "<td>" . $i . "X" . $j . "=" . ($i * $j) . "</td>";
        }
        echo "</tr>";
}
?>
</table>
</body>
</html>