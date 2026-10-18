<?php

  session_save_path("./sesiones");

  session_start();

  if (isset($_SESSION)){
      if ($_SESSION["logeado"] == false){
          header("Location: index.html");
      }
  }

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
  <a href="index.html"> Ir a login </a> <br><br>
  <a href="logout.php"> Hacer log out </a> 

</body>
</html>

