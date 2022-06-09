<?php
    $numUm = $_GET['txtNum'];
    $numSeg = $_GET['txtNum2'];

    echo "<h2>Numeros entre os valores escritos</h2>";
        
    for($i = $numUm + 1; $i < $numSeg; $i++){
        echo "<h4> $i<h4><br>";
    }

?>