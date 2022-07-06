<!DOCTYPE html>
<html>
    <body>

        <?php
        /* Variable */
            $var1 = 50;
            $var2 = 12;
            $var3 = 20;

            /* Declarar 2 variables mayor */
            if ($var1 > $var2) {
                echo "El numero $var1 es el mayor";
            } elseif ($var2 > $var1) {
            echo "El numero $var2 es el mayor";}

            echo "<hr>";

            /* Declarar 3 variables menor */
            if ($var1 < $var2 and $var1 < $var3) {
                echo "El numero $var1 es menor que $var2 y $var3";
            } elseif ($var2 < $var1 and $var2 < $var3) {
            echo "El numero $var2 es menor que $var1 y $var3";
            } else echo "El numero $var3 es menor que $var1 y $var2";
            


        ?> 

    </body>
</html>
