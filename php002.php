<!DOCTYPE html>
<html>
    <body>

    
        <?php

            //Variables
            $numEntero1 = 10;
            $numEntero2 = 10;
            $numDecimal1 = 12.56;
            $numDecimal2 = 2.5;
            $txt1 = "Hola";
            $txt2 = "Mundo";

            //suma enteros
            echo "Suma de enteros:<br>";
            $sumaEntero= $numEntero1 + $numEntero2;
            echo $sumaEntero;

            echo "<hr>";
            

            //suma decimales
            echo "Suma de decimales:<br>";
            $sumaDecimal= $numDecimal1 + $numDecimal2;
            echo $sumaDecimal;

            echo "<hr>";
            
            //multipliacion
            echo "Multiplicacion:<br>";
            $multipliacion = $numEntero1 * $numEntero2;
            echo $multipliacion;

            echo "<hr>";

            //concatenación de palabras
            echo "Concatenacion:<br>";
            $textoCompleto = $txt1 . $txt2;
            echo $textoCompleto;

            echo "<hr>"

        ?> 

    </body>
</html>
