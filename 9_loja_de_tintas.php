<?php

print "\n Digite a área a ser pintada (em metros quadrados): ";
$area_pintada      = (float) fgets (STDIN);

// while  --> repita 

$margem_de_erro    = $area_pintada + ($area_pintada * 0.10);
$litros_gastos     = $margem_de_erro / 6;


$valor_lata1       = 0;
$valor_galao1      = 0;
$lata1             = 0;
$galao1            = 0;
$quantidade_lata1  = 0;
$quantidade_galao1 = 0;
//-----------------------------------------------------//
$valor_lata2       = 0;
$valor_galao2      = 0;
$lata2             = 0;
$galao2            = 0;
$quantidade_lata2  = 0;
$quantidade_galao2 = 0;
//--------------------------------------------------//


while ($lata1 < $litros_gastos) {
    
    $lata1            = $lata1            + 18;
    $valor_lata1      = $valor_lata1      + 80;
    $quantidade_lata1 = $quantidade_lata1 + 1;
}

print "\n \n Para pintar $area_pintada metro(s) quadrato(s) poderá ser efetuada a compra de $quantidade_lata1 lata(s) de 18L, custando assim, R$ $valor_lata1";


while ($galao1 < $litros_gastos) {
    
    $galao1            = $galao1            + 3.6;
    $valor_galao1      = $valor_galao1      + 25;
    $quantidade_galao1 = $quantidade_galao1 + 1;
}

print "\n \n Para pintar $area_pintada metro(s) quadrato(s) poderá ser efetuada a compra de $quantidade_galao1 galão(ões) de 3,6L, custando assim, R$ $valor_galao1";


while ( $litros_gastos > 0){

    while ( $litros_gastos >= 18) {

        $valor_lata2       = $valor_lata2       + 80;
        $quantidade_lata2  = $quantidade_lata2  + 1;
        $litros_gastos     = $litros_gastos     - 18;  
    }

        $galao2            = $galao2            + 3.6;
        $valor_galao2      = $valor_galao2      + 25;
        $quantidade_galao2 = $quantidade_galao2 + 1;
        $litros_gastos     = $litros_gastos     - 3.6;  
    
}

$valor_total = $valor_galao2 + $valor_lata2;

print "\n \n Para pintar $area_pintada metro(s) quadrato(s) poderá ser efetuada a compra de $quantidade_lata2 lata(s) de 18L, junto de $quantidade_galao2 galão(ões) de 3,6L custando assim, R$ $valor_total \n";

echo "\n *ESTÁ SENDO LEVADO EM CONSIDERAÇÃO UM ACRÉSCIMO DE 10% DO VALOR TOTAL DA ÁREA A SER PINTADA* \n \n";
