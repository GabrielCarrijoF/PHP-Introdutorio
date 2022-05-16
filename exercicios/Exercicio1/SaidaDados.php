<?php

    $nome = $_GET['txtNome'];
    $cidade = $_GET['txtCidade'];
    $endereco = $_GET['txtEndereco'];
    $estado = $_GET['txtEstado'];
    

    echo"<html>
            <h1> Pagina para receber dados informados</h1>
            <hr>
            <h5> O nome informado foi: $nome </h5>
            <br>
            <h5> A cidade informada foi: $cidade </h5>
            <br>
            <h5> O endereço informado foi: $endereco </h5>
            <br>
            <h5> O estado informado foi: $estado </h5> 
            ";

?>