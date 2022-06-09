<?php

    session_start();

    if($_SESSION['token'] != "ABCDEF"){
       
        header("Location:login.php");
    }

    $user = $_SESSION['user'];

    echo "<html>";
    echo "<h1> Pagina Do Sistema </h1>";
    echo "<hr />";
    echo "<h3> Voce esta conectado como: $user";


?>