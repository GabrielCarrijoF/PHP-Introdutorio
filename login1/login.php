<html>

    <h1>Area Restrita, somente pessoas autorizadas</h1>
    <hr/>

    <form action='verificaLogin.php'>
        <p>
            <label>Usuario</label>
            <input type="text" name="txtUser"/>
        </p>

        <p>
            <label> Senha </label>
            <input type="text" name="txtSenha">
        </p>

        <p>
            <input type="submit" value="Entrar">
        </p>
    </form>

</html>

<?php

    if(isset($_GET['erro'])){
        echo "<h3> Usuario ou senha Invalidos !! </h3>";
    }
?>