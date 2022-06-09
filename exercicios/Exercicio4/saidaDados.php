<?php
    $peso = $_GET['txtPeso'];
    $altura = $_GET['txtAltura'];

    echo "<h2>Seu estado de imc é: </h2>";
        
    $imc =  ($altura * 2) / $peso;

    if($imc < 16 ){
        echo "<h4>Magreza III</h4>";
    } else if($imc <= 16.0 and $imc <= 16.9 ){
        echo "<h4>Magreza II</h4>";
    } else if($imc <= 17.0 and $imc <= 18.4 ){
        echo "<h4>Magreza I</h4>";
    } else if($imc <= 18.5 and $imc <= 24.9 ){
        echo "<h4>Adequado</h4>";
    } else if($imc <= 25.0 and $imc <= 29.9 ){
        echo "<h4>Pré-Obeso</h4>";
    } else if($imc <= 30.0 and $imc <= 34.9 ){
        echo "<h4>Obesidade II</h4>";
    } else if($imc <= 35.0 and $imc <= 39.9 ){
        echo "<h4>Obesidade II</h4>";
    } else {
        echo "<h4>Obesidade III</h4>";
    }

?>