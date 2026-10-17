
<h1>Botiga d'Alcohol</h1>

<form action="bodega.php" method="get">

    <label for="edad">¿Ets mayor d'edat?:</label>
    <select id="edad" name="edad">
        <option value="true">Sí</option>
        <option value="false">No</option>
    </select> <br> <br>

    <label for="idiomas">Idioma:</label>
    <select id="idioma" name="idioma">
        <option value="catala">català</option>
        <option value="espanyol">espanyol</option>
        <option value="angles">anglès</option>

    </select> <br> <br>

    <label for="monedas">Moneda:</label>
    <select id="moneda" name="moneda">
        <option value="euros">euros</option>
        <option value="lliures">lliures</option>
        <option value="dolars">dòlars</option>
    </select> <br> <br>

    <input type="submit" value="Enviar">
</form>

<?php

    if (isset($_GET["edad"]) || isset($_GET["idioma"]) || isset($_GET["moneda"])) {
        
        if (isset($_GET["edad"])){
            
        if ($_GET["edad"] == "true"){
                $edad = 1;
            }else{
                $edad = 0;
            }

            setcookie("majoredat", $edad );
        }

        if(isset($_GET["idioma"])){
            setcookie("idioma", $_GET["idioma"]);
        }
        if(isset($_GET["moneda"])){
            setcookie("moneda", $_GET["moneda"]);
        }

        //guardo las cookies en la primera petición 

        //obligo a pasar por la siguiente petición redirigiendo al mismo sitio y acabando la ejecución de php 
        header("Location: bodega.php");
        exit;
    }

    if(isset($_COOKIE["moneda"])){
        $moneda = $_COOKIE["moneda"];
        switch ($moneda){
            case "euros":
                $moneda_simbolo = "€";
                break;
            case "dolars":
                $moneda_simbolo = "$";
                break;
            case "lliures":
                $moneda_simbolo = "£";
                break;
            default:
                $moneda_simbolo = "error del switch moneda";
        }
    }


    if(isset($_COOKIE["idioma"])){
        $idioma = $_COOKIE["idioma"];
        switch($idioma){
            case "catala":
                if (isset($_COOKIE["majoredat"])){
                    if (!$_COOKIE["majoredat"]){
                        echo "No et podem vendre alcohol si ets menor d'edat";
                    }else{
                        echo "T’oferim el vi “Les Terrasses” a un preu de 39 ".$moneda_simbolo;
                    }
                }
                break;
            case "espanyol":
                if (isset($_COOKIE["majoredat"])){
                    if (!$_COOKIE["majoredat"]){
                        echo "No te podemos vender alcohol si eres menor de edad";
                    }else{
                        echo "Te ofrecemos el vino “Les Terrasses” a un precio de 39 ".$moneda_simbolo;
                    }
                }
                break;
            case "angles":
                case "angles":
                if (isset($_COOKIE["majoredat"])){
                    if (!$_COOKIE["majoredat"]){
                        echo "We cannot sell you alcohol if you are a minor.";
                    }else{
                        echo "We offer you the wine “Les Terrasses” at a price of 39 ".$moneda_simbolo;
                    }
                }
                break;
            default:
                echo "error del switch idioma";
        }
    }
?>
