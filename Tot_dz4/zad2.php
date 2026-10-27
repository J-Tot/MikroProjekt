<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php 

for ($i=1;$i<101;$i++){


if ($i%2==0) echo '<a href="https://www.google.com/" target="_blank">'. $i . "&nbsp;".  'Google</a> <br>';

else echo '<a href="https://www.google.com/">'. $i . "&nbsp;".  'Google</a> <br>';


}
?>
</body>
</html>