<?php

    session_start();
    $nome = $_SESSION['nome'];
    $num  = $_SESSION['num']; 

    echo"<html>
            <h1> Pagina para receber dados informados</h1>
            <hr>
            <h3> Parabéns $nome, você chegou ao fim </h5>
            ";

            for($i = 1; $i <=10; $i++){

                $resultado =  $i * $num;
                
                echo "$i X $num = $resultado<br>";
            }
        

?>

