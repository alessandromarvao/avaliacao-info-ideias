<?php

function sortRandom()
{
    // Cria o array
    $array = [];

    // Alimenta o array com valores aleatórios entre 1 e 10
    for ($i = 0; $i < 20; $i++) {
        array_push($array, rand(1, 10));
    }

    // Exibe os valores do array para o cliente
    echo "Array sorteado = " . implode(',', $array) . "<br/>"; 
    $novo_array = [];

    // Percorre o array
    foreach($array as $row) {
        // Armazena a contagem de repetições do valor no array inicial
        $count = 0;
        // Percorre o mesmo array dentro dele, de modo a verificar item por item se há repetição 
        foreach($array as $row2) {
            // Confere se o item atual do array já repetiu dentro dele mesmo
            if($row2 == $row) {
                // incrementa a quantidade de repetições do valor
                $count++;
            }
        }

        // Confere se o item atual possui mais de uma repetição
        if($count == 1) {
            // Armazena no novo array os números que só apareceram no array apenas 1x
            array_push($novo_array, $row);
        }
    }
    
    echo "Os números que não se repetem são: " . implode(', ',$novo_array);
}

sortRandom();