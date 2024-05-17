<?php

$arr = [1, 5, 3, 0];
$qnt_elementos = count($arr);

for ($i = 0; $i < $qnt_elementos - 1; $i++) {
    for ($PosicaoAtual = 0; $PosicaoAtual < $qnt_elementos - $i - 1; $PosicaoAtual++) {
        $ProximaPosicao = $PosicaoAtual + 1;
        
        if ($arr[$ProximaPosicao] < $arr[$PosicaoAtual]) {
            $auxiliar = $arr[$PosicaoAtual];
            $arr[$PosicaoAtual] = $arr[$ProximaPosicao];
            $arr[$ProximaPosicao] = $auxiliar; // Adicionei o ponto e vírgula aqui
        }
    }
}

// Para verificar se a ordenação ocorreu corretamente
print_r($arr);

?>
