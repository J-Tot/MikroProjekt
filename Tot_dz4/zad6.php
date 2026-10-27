<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


    <table border="1">

        <?php

        $redovi = 3;
        $stupci = 2;
        for ($i = 0; $i < $redovi; $i++){

            echo "<tr>";

        for ($j = 0; $j < $stupci; $j++) {

            echo "<td>&nbsp;</td>";
        }


        echo "</tr>";
        }
        ?>
    </table>



</body>

</html>