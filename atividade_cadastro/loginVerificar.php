<?php
        //Usuario admin, senha 123456


        $user = $_GET['txtUsuario']; 
        $pw   = $_GET['txtSenha'];

        $SERVIDOR = 'localhost';
        $USUARIO  = 'aluno';
        $SENHA    = '123456';
        $BANCO    = 'TI41';
    
        $con = new mysqli ($SERVIDOR,$USUARIO,$SENHA,$BANCO);
        
        
        $sql = "select * from cadastro where usuario =  and senha = ;"
            $ret = $con->query($sql);
                 while($registro = $ret->fetch_assoc()){
            if  ( $user ==   && $pw == $){
                //echo "O login foi validado com sucesso!";
                session_start();
                $_SESSION['user'] = $user;
                $_SESSION['token'] ="ABCDEF";
                header("Location: cadastroNovos.php");
            } else{
                //echo "Usuario ou senhas inválidos.";
                header("Location: novoLogin.php?erro=0");
            
            }
        }


