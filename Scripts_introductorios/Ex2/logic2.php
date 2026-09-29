<?php

    if (isset($_GET["quantitat"]) &&
        is_numeric($_GET["quantitat"]) &&
        $_GET["quantitat"] > 0
    ){
        $quantitat = $_GET["quantitat"];
        $resultat = (0.88 * $quantitat);
        echo "Son ".$resultat." €";
        echo "<form action='index.html' method='get'> <button>Tornar</button> </form>";

    } else {

        echo "Error";
        echo "<form action='index.html' method='get'> <button>Tornar</button> </form>";
    }
        
?>
