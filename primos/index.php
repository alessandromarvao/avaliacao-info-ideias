<?php
/**
 * Retorna os números primos dentro do intervalo citado, desprezando os números citados.
 */
function primos(int $numInicial, int $numFinal) {
    // Array que receberá os números primos do intervalo
    $array = [];

    // Percorre os itens dentro do intervalo citado
    for ($i = $numInicial+1; $i<$numFinal; $i++) { 
        // Presume que o número atual dentro do intervalo é primo
        $bool = true;

        // Percorre os números de 2 até o citado e confere se o resto da divisão dentre cada iteração é igual a zero
        for($j = 2; $j<$i; $j++){
            if($i % $j == 0) {
                // O número não é primo
                $bool = false; 
                break;
            }
        }
        if($bool) { // confere se o número é primo e armazena no array
            array_push($array, $i);
        }
    }

    return $array;
}
