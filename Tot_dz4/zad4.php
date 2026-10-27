<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
    
    $rows=6;
    for ($i=0;$i<$rows;$i++){
        
    if($i==0) echo  '<table border="1">';
    echo "<tr> <td>0</td> <td>0</td> <td>0</td> <td>0</td> <td>0</td></tr>";
    if($i==$rows-1) echo '</table>';
    
    }
    
    ?>

    </table>
</body>
</html>