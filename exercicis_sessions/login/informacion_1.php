<?php

  session_save_path("./sesiones");

  session_start();

  echo "<h1> Usuario: ".$_SESSION["usuario"]."</h1>";

?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>informacion_1</title>
</head>

<body>
    
  <p>Primera pagina de informacion_1.</p>

  <a href="informacion_2.php"> Ir a la segunda página</a> <br><br>
  <a href="index.html"> Ir a login </a>

</body>
</html>

