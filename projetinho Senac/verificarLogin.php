<?php
        //Usuario admin, senha 123456


        $user = $_GET['txtUser']; 
        $pw   = $_GET['txtSenha'];

if  ( $user == "admin" && $pw == "123456" ){
    echo "O login foi validado com sucesso!";
    session_start();
    $_SESSION['user'] = $user;
    $_SESSION['token'] ="ABCDEF";
    header("Location: loginCadastro.php");
} else{
    echo "Usuario ou senhas inválidos.";
    header("Location: loginCadastro.php?erro=0");

}










?>