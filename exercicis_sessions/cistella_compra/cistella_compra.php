<?php

    session_save_path("./sesiones");

    session_start();

    if (!isset($_SESSION["prod-1"]) ){
        $_SESSION["prod-1"] = 0;
    }
    if (!isset($_SESSION["prod-2"]) ){
        $_SESSION["prod-2"] = 0;
    }

    if (!empty($_GET["prod-1"])){
        $_SESSION["prod-1"] = $_SESSION["prod-1"] + $_GET["prod-1"];
    }

    if (!empty($_GET["prod-2"])){
        $_SESSION["prod-2"] = $_SESSION["prod-2"] + $_GET["prod-2"];
    }


    //$_SESSION
    
    header("Location: index.html");
?>