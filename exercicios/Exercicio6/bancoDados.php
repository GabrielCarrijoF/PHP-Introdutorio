<?php
    $SERVIDOR = 'localhost';
    $USUARIO  = 'admin';
    $SENHA    = '@Luno123';
    $BANCO    = 'TI41';

    $nome = $_GET['txtNome'];
    $quantidade = $_GET['txtquantidade'];
    $valor = $_GET['txtvalor'];
  
    $con = new mysqli($SERVIDOR, $USUARIO, $SENHA, $BANCO);

    if($con -> connect_error) {
        echo "Erro ao conectar com a base de dados";

    } else {
        echo "<h3>A conexão do banco foi realizada</h3>";

        $sql = "insert into TI41.produtos (nome, quantidade, valUnit) values ('$nome', $quantidade, $valor)";

        $ret = $con -> query($sql);

        if($ret == true){
            echo "Registro inserido";
            header("Location: mostrarDados.php");
        }
        $con -> Close();
    }
?>