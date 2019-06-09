<?php 
    $departments = array("Jeans", "T-Shirts", "Hats", "Boots", "Something");
    $arr_length = count($departments); 
    echo 
    '
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <title>Document</title>
        </head>
        <body>';
            for($i=0; $i<$arr_length; $i++) {
                echo "$departments[$i]<br>";
            }	
    echo
    '
        </body>
        </html>
    ';
?>
