<?php
    $tabuada = $_GET['txtNum'];

    echo "Tabuada<br><br>";

    for($i = 1; $i <=10; $i++){

        $resultado =  $i * $tabuada;
        
        echo "$i X $tabuada = $resultado<br>";
    }

?>   