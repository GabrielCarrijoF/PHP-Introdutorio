<?php

    $user = $_GET['txtUser'];
    $pw   = $_GET['txtSenha'];

    if($user == 'Admin' && $pw == '123456'){
        
        session_start();
        $_SESSION['user'] = $user;
        $_SESSION['token'] = "ABCDEF";

        header("Location:sistema.php");
    } else {
       // echo "Usuarios ou senhas invalidos!";
        header("Location: login.php?erro=0");
    }

?>