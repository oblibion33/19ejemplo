<?php 
include "programacion.php";
?>
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
        require "resultado.php";
        
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
        echo "<br>";
        
        $dia["Lunes"]= "2 clase";
        $dia["Martes"]= "3 clase";
        $dia["Miercoles"]= "4 clase";
        $dia["Jueves"]= "4 clase";
        $dia["Viernes"]= "4 clase";
        
        foreach ($dia as $value) {
    
            echo "$value <br>";
            
        }
        
        ?>
    </body>
</html>
