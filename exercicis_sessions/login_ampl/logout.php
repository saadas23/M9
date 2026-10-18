<?php

    session_save_path("./sesiones");

    //pilla la sesion
    session_start();
    //Deshace todas las variables de la sesion
    session_unset();
    //Destruye la sesion 
    session_destroy();

?>


<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>log out</title>
</head>

<body>
    
    <h1>Log out </h1>

    <p>Has cerrado sesión</p>

    <a href="index.html"> Ir a login </a> <br><br>
</body>
</html>