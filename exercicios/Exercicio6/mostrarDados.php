<?php
    // Conexão com banco de dados
    // Criar o objeto de conexão

    $SERVIDOR = 'localhost';
    $USUARIO  = 'admin';
    $SENHA    = '@Luno123';
    $BANCO    = 'TI41';

    $con = new mysqli($SERVIDOR, $USUARIO, $SENHA, $BANCO);

    if($con -> connect_error) {
        echo "Erro ao conectar com a base de dados";

    } else {
        echo "<h3>A conexão do banco foi realizada</h3>";

   
        $sql = "select * from TI41.produtos;";
        $ret = $con -> query($sql);

        while($registro = $ret->fetch_assoc()){
            echo "Nome: " , $registro['nome'];
            echo ", Quantifade: " , $registro['quantidade'];
            echo ", Valor: " , $registro['valUnit'];
            echo "<br>"; 
            echo "<br>"; 
            $valorTotal = ($registro['quantidade'] * $registro['valUnit']);     
            echo "Valor Total: " , $valorTotal;    
            echo "<br>";    
        }
        $con -> Close();
    }
?>