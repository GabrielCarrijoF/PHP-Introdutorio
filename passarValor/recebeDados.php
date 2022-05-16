<?php

    $nome = $_GET['txtNome'];
    $telefone = $_GET['txtTelefone'];

    echo"<html>
            <h1> Pagina para receber dados informados</h1>
            <hr>
            <h5> ) nome informado foi: $nome </h5>
            <br>
            <h5> O telefone informado foi: $telefone </h5>
            ";

?>