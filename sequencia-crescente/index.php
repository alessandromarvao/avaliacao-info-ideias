<?php

function sequenciaCrescente(array $array)
{
    // Confere se o array está na ordem crescente se remover um elemendo de cada vez
    $bool = false;

    // Percorre o array para remover um elemento de cada vez
    for ($i = 0; $i < count($array); $i++) {
        // Supõe que o array está na ordem crescente (true)
        $bool_iteracao = true;

        // Array que vai receber os novos arrays sem um item do array anterior
        $novo_array = [];

        // Armazena os valores no novo array
        for ($j = 0; $j < count($array); $j++) {
            if ($i != $j) { // remove um elemento do array principal
                array_push($novo_array, $array[$j]);
            }
        }

        // ------------------- Aqui termina a parte 1 - Criação dos novos arrays com 1 elemento a menos ------------------------

        // Percorre o novo array
        for ($x = 0; $x < count($novo_array); $x++) {
            // Não conta o primeiro valor do novo array (não dá pra saber o resultado anterior a ele)
            if ($x != 0 && ($novo_array[$x] - 1 != $novo_array[$x - 1])) {
                // Confirma que o elemento não está em ordem crescente
                $bool_iteracao = false;
                // Termina esta iteração e percorre o próximo caminho
                break;
            }
        }

        // Verifica se algum dos arrays novos estão em ordem crescente
        if ($bool_iteracao) {
            $bool = true;
        }
    }

    if ($bool) {
        return "TRUE";
    } else {
        return "FALSE";
    }
}
