<?php

print              " \n Digite seu salário: ";
$salario_inicial     = (float) fgets (STDIN);

print " \n Digite a porcentagem de aumento: ";
$porcentagem_aumento = (float) fgets (STDIN);

$valor_aumento = $salario_inicial * ($porcentagem_aumento / 100);
$novo_salario  = $salario_inicial + $valor_aumento;

print "\n Com o aumento de $porcentagem_aumento%, (correspondente a R$ $valor_aumento). O salário de R$ $salario_inicial passará a ser: R$ $novo_salario \n\n  ";

