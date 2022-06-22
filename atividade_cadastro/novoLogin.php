<html>
    <h1>Bem vindo a tela de login</h1>
    <hr />
    <form action = 'loginVerificar.php' >
        <p>
                <label>Usuário</label>
                <input type = "text" name = "txtUsuario" />
</p>
                <label>Senha</label>
                <input type = "text" name = "txtSenha" />
</p>
<p>
                <input type = "submit" value = "Entrar" />
</p>



</form>



    </html>
    <?php
        if ( isset($_GET['erro'])){
            echo "<h3>Usuário ou senha inválidos.</h3>";
    
        }
    

?>