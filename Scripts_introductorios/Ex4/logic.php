<?php

    if (isset($_GET["estilo"])) {
        $opcio = $_GET["estilo"];
        switch ($opcio) {
            case "rock":
                echo "Visca el Rock";
                echo "<form action='index.html' method='get'> <button>Tornar</button> </form>";
                break;
            case "pop":
                echo "Amant del Pop";
                echo "<form action='index.html' method='get'> <button>Tornar</button> </form>";
                break;
            case "jazz":
                echo "Benvingut al Club de Jazz";
                echo "<form action='index.html' method='get'> <button>Tornar</button> </form>";
                break;
            case "clasica":
                echo "Elegància Clàssica";
                echo "<form action='index.html' method='get'> <button>Tornar</button> </form>";
                break;
            case "hip-hop":
                echo "Flux i Hip-Hop";
                echo "<form action='index.html' method='get'> <button>Tornar</button> </form>";
                break;
            default:
                echo "Error";
        }
    }else{
        echo "Cap estil seleccionat";
        echo "<form action='index.html' method='get'> <button>Tornar</button> </form>";
    }




?>