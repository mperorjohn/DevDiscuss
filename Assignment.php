<?php

$names  = ['John','Samson','Lawrence','Glory','Jeremiah'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment</title>
</head>
<body>


    <?php for($i=0; $i < count($names); $i++):  ;?>
        <div style="padding: 30px; background-color:orange; margin:10px; border-radius:10px;">
            <p style="font-size:30px;">Good Evening <?php echo $names[$i]   ; ?></p>
        </div>
    <?php endfor;?>
            
</body>
</html>