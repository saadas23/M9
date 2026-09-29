


<?php

    date_default_timezone_set("Europe/Madrid");

    if ( date("H") >= 5 && date("H") < 14 ) {
        echo "Bon dia";
    }elseif ( date("H") >= 14 && date("H") <= 19 ){
        echo "Bona tarda";
    }else{
        echo "Bona nit";
    }

    echo "<br>";
    echo "La hora del servidor es " . date("H:i:s a");
?>