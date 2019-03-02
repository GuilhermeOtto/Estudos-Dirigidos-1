<?php

print "\n Digite a quilometragem rodada durante o aluguel do veículo: ";
$quilometragem    = (float) fgets (STDIN);

print "\n Informe o período de dias em que o veículo foi alugado: ";
$dias_alugado     = (float) fgets (STDIN);

$valor_a_ser_pago = ($dias_alugado * 60) + ($quilometragem * 0.15);

print "\n\n O valor a ser pago pelo aluguel do carro é de: R$ $valor_a_ser_pago";
