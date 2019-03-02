<?php

print "\n Digite a distância a ser percorrida (em Km): ";
$distancia        = (float) fgets(STDIN);

print "\n Digite a velocidade média esperada para a viagem (em Km/h): ";
$velocidade_media = (float) fgets (STDIN);

$tempo_estimado   = $distancia / $velocidade_media;

print "\n \n A viagem durará cerca de $tempo_estimado hora(s) ";
