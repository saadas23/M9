<?php

    if (isset($_GET["quant"]) &&
        is_numeric($_GET["quant"]) &&
        $_GET["quant"] > 0
    ){
        $quant = $_GET["quant"];
        $iva = $_GET["iva"];
        $resultat = $quant + ($quant * $iva);

        echo "Son ".$resultat." €";
        echo "<form action='index.html' method='get'> <button>Tornar</button> </form>";

    }else{

        echo "Posa el preu";
        echo "<form action='index.html' method='get'> <button>Tornar</button> </form>";

    }


?>