<?php

function sequenciaCrescente(array $array)
{
    $bool = false;

    for ($i = 0; $i < count($array); $i++) {

        $novo_array = [];

        for ($j = 0; $j < count($array); $j++) {            
            if ($i != $j) {
                array_push($novo_array, $array[$j]);
            }
        };

        echo "<pre>";
        print_r($novo_array);
        echo "</pre>";
    }
}

echo sequenciaCrescente([1, 2, 3, 1, 1, 5]);
