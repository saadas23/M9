<?php
    session_save_path("./sesiones");

    session_start();
    



    //var_dump($_POST);
    //Si un campo esta vacio (empty)
    if (empty($_POST["usuario"]) || empty($_POST["password"])){
        echo "falta un campo o dos";
        $_SESSION["logeado"] = false;
        header("Location: index.html");
    }elseif ($_POST["usuario"] == $_POST["password"]){
        echo "El usuaro y contraseña existen, también son iguales";
        $_SESSION["logeado"] = true;
        $_SESSION["usuario"] = $_POST["usuario"];
    }else{
        echo "El usuario y contaseña existen pero no son iguales";
        $_SESSION["logeado"] = false;
        header("Location: index.html");
    }


    if (isset($_SESSION)){
        if ($_SESSION["logeado"] == true){
            header("Location: informacion_1.php");
        }
    }

?>