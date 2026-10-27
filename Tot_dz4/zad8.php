<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
$broj_strumfova = 11;
$columns = 5;
$rows = ceil($broj_strumfova / 3);
$slika = 1;

echo "<table border='1'>";

for ($i = 0; $i < $rows; $i++) {
    echo "<tr>";

    for ($j = 0; $j < $columns; $j++) {
        if ($j < 3 && $slika <= $broj_strumfova) {
            echo "<td>";
            echo "<img src='strumfovi/strumf_" . $slika . ".jpg' width='100'>";
            echo "</td>";
            $slika++;
        } else {
            echo "<td>&nbsp;</td>";
        }
    }

    echo "</tr>";
}

echo "</table>";
?>
</body>
</html>