<?php
    $usuario = $_POST["usuario"];
    $senha = $_POST["senha"];
   
    if(isset($usuario) && !empty($usuario) && isset($senha) == "1234" && !empty($senha)){

        if($usuario == "Linsday" && $senha == "1234"){
            session_start();
            $_SESSION["user"] = $usuario;
            header("location:menu.php");
        }
        else {
            header("location:index.php");
        }
    }

    else {
        header("location:index.php");
    }

?>