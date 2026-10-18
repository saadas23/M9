<?php

    session_save_path("./sesiones");

    session_start();


    if (isset($_SESSION["prod-1"])){
        $prod1 = $_SESSION["prod-1"];
        $prod1p = $prod1 * 32;
    }else{
        $prod1 = "No has comprado";
        $prod1p = 0;
    }
    
    if (isset($_SESSION["prod-2"])){
        $prod2 = $_SESSION["prod-2"];
        $prod2p = $prod2 * 23;
    }else{
        $prod2 = "No has comprado";
        $prod2p = 0;
        
    }

?>



<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>Compra</title>
</head>

<body>
    
    <h1>Resumen </h1>

    <p>Lista de la compra</p>

    <p>Manzanas: <?php echo $prod1?> x 32€ = <?php echo $prod1p?> € </p>
    <p>Peras: <?php echo $prod2?> x 23€ =  <?php echo $prod2p?> € </p>


    <p>Total: <?php echo $prod1p + $prod2p?> €</p>

    <form action="confirmar.php" method="get">
        <input type="submit" value="confirmar">    
    </form>

    <br> 

    <a href="index.html"> Ir al inicio </a> <br><br>

   
</body>
</html>