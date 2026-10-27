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
        $stupci = 5;
        $start = 4;
        for ($i = 0; $i < $redovi; $i++){

            echo "<tr>";

        for ($j = 0; $j < $stupci; $j++) {

           if($i==0) echo "<td>".$start+$j."</td>";
           elseif($j==0) echo "<td>".$start+$i."</td>";
           else echo "<td>&nbsp;</td>";
        }


        echo "</tr>";
        }
        ?>

</table>







</body>
</html>