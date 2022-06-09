<?php
    // Conexão com banco de dados
    // Criar o objeto de conexão

    $SERVIDOR = 'localhost';
    $USUARIO  = 'admin';
    $SENHA    = '@Luno123';
    $BANCO    = 'TI41';

    $nome = $_GET['txtNome'];
    $telefone = $_GET['txtFone'];

    $con = new mysqli($SERVIDOR, $USUARIO, $SENHA, $BANCO);

    if($con -> connect_error) {
        echo "Erro ao conectar com a base de dados";

    } else {
        echo "<h3>A conexão do banco foi realizada</h3>";

        $sql = "insert into clientes (nome, telefone) values ('$nome','$telefone')";
        $ret = $con -> query($sql);

        if($ret == true){
            echo "Registro inserido";
        }


        $con -> Close();
    }
?>