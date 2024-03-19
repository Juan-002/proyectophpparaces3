<?php
$paises = array('colombia', 'USA', 'Puerto rico', 'mi casa');
?>
<!DOCTYPE html>
    <html lang = "en">
        <head>
            <meta charset="UTF-8">
            <title>Document </title>
        </head>
        <body>
            
             <?php foreach($paises as $Pais){
                
                if ($Pais == 'mi casa'){
                    continue;
                 }
                 echo '<li>'. $Pais . '</li>';
             } 
             
             ?> 
                
            </ul>
        </body>
    </html>