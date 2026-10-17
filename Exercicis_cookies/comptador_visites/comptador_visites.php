<h1>Tienda</h1>


<?php

    $descuento=0;
        
    if(!isset($_COOKIE["contador"])){
        setcookie("contador", 1);
        $contador_views = 1;
    } else {
        $contador_views = $_COOKIE["contador"] + 1; 
        setcookie("contador", $contador_views);
        if (isset($_COOKIE["contador"])){
            echo "<h2> Tus visitas: ".$_COOKIE["contador"]."</h2>";
        }

        if ($_COOKIE["contador"] >= 5){
            echo "<h3> Oferta exclusiva! Utilitza el codi BOTIGA20 per obtenir un 20% de descompte en les teves primeres compres a la botiga </h3>";
        }

        $compra_previa = false;
        if (isset($_POST["codigo"])){ 
            if ($_POST["codigo"] == "BOTIGA20"){
                $compra_previa = true;
                $descuento=0.20;
            }     
        }

        if ($_COOKIE["contador"] >= 10 && $compra_previa == false)  {
            echo "<h3> Oferta exclusiva sols per a tu! Utilitza el codi BOTIGA50 per obtenir un 50% de descompte en les teves primeres compres a la botiga </h3>";
        }
        if (isset($_POST["codigo"])){
            if ($_POST["codigo"] == "BOTIGA50"){
                $descuento=0.50;
            }
        }
    }

    $precio=30;

    echo "<p>".($precio-($precio*$descuento))." euros </p>";
    
    if (isset($_POST["reset"])){
        $descuento=0;
        setcookie("contador", "", time() - 3600);
        header("Location: comptador_visites.php");
    }
?>


<form action="comptador_visites.php" method="POST">
    Codigo: <input type="text" name="codigo"> <br>

    <input type="submit" value="Enviar"> <br> <br>
    <input type="submit" name="reset" value="Resetear">
</form>