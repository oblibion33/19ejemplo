<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $A = 10;
        $a= 10;
        $hello= "Hola mundo";
        $a++;
        
        echo "Saludo $hello x $A y $a";
        echo "<br>";
        echo 'Saludo $hello x $A y $a';
        echo "<br>";
        /*

         * las concatenaciones son con un "." para concadenar cada lado, debe ser uno por cada lado a concatenar         */
        echo 'Saludo'. $hello. 'x' .$A. 'y'.$a;
        ?>
    </body>
</html>
