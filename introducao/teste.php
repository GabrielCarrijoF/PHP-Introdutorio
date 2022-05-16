<?php
echo "Estrutura condicional";
$idade =0;
$idade =10;

echo "<br>";

if ($idade > 18) {
    echo "Maior que 18 anos";
} else if ($idade < 18) {
    echo "Menor de 18";
} else {
    echo "Exatos 18 anos";
}

$vetor = array("chave1" => "Valor chave 1", "chave 2" => "Valor chave 2");

echo "<br>";
echo "<br>";

echo "Acessando o valor do vetor: " .$vetor['chave1'];

echo "<br>";

//para cada chave do vetor 
foreach ($vetor as $v){
    echo "<br> $v";
}

echo "<br>";

foreach ($vetor as $chave => $v){
    echo "<br> $chave = $v";
}

//Exercicio     
echo "<br>";
echo "<br>";

    $i=0;

    echo "Numeros Pares: ";
    for($i = 0; $i <= 100; $i+10 ){

        if($i %2 ==0){
            echo "$i ,\n";
        }

    }

    echo "<br>";
    echo "<br>";

    echo "Numeros Impares ";
    for($i = 0; $i <= 100; $i++ ){

        if($i %2 ==1){
            echo "$i ,";
            echo "<br>";
        }
    
    }
?>
