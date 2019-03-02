<?php

print "\n Digite o valor da mercadoria: ";
$valor_mercadoria = (float) fgets (STDIN);

print "\n Digite o percentual de desconto: ";
$desconto         = (float) fgets (STDIN);

$valor_desconto = $valor_mercadoria * ($desconto /100);
$valor_final    = $valor_mercadoria - $valor_desconto; 

print "\n o valor final da mercadoria após o desconto é : $valor_final  ";
