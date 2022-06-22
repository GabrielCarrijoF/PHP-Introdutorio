<?php
    session_start();
    if($_SESSION['token'] != 'ABCDEF'){
        header('Location:novoLogin.php')
    }
    $user = $_SESSION['user'];
?>

<html>
    <h1>Cadastro de novos usuários</h1>
    <hr />
    <!-- Para entrada de dados podemos utilizar um formulário -->
    <form action = "bancoDados2.php" >
        <label>Nome</label>
        <input type = "text" name = "txtNome" />
        <br>
        <label>Usuario</label>
        <input type = "text" name = "txtUsuario" />
        <br>
        <label>Senha</label>
        <input type = "text" name = "txtSenha" />
        <br>
        <input type = "submit" value = "Enviar" />

</form>
</html>



    

    