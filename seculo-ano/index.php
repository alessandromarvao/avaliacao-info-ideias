<?php

/**
 * Confere o ano recebido e informa em qual século ele pertence 
 * 
 * @return int Século do ano recebido
 */
function seculoAno(int $ano)
{
    $seculo = 0;

    $div = fmod($ano, 100);

    $seculo = round($ano / 100);

    switch (true) {
        case ($div == 0):
            $seculo = round($ano / 100);
            break;
        case ($div < 50):
            $seculo = round($ano / 100) + 1;
            break;
        default:
            $seculo = round($ano / 100);
    }

    return $seculo;
}
