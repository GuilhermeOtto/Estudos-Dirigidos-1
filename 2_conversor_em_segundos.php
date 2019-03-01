<?php

Print     " \n Digite a quantidade de dias: ";
$dias     = (int) fgets (STDIN);

Print    " \n Digite a quantidade de horas: ";
$horas    = (int) fgets (STDIN);

Print  " \n Digite a quantidade de minutos: ";
$minutos  = (int) fgets (STDIN);

Print " \n Digite a quantidade de segundos: ";
$segundos = (int) fgets (STDIN);

$minutos_convertidos   = $minutos * 60;
$horas_convertidas     = $horas * (60**2);
$dias_convertidos      = ($dias * 24) * (60**2);
$resultado_em_segundos = $dias_convertidos + $horas_convertidas + $minutos_convertidos + $segundos;

print " \n $dias dia(s), $horas hora(s), $minutos minuto(s) e $segundos segundos equivalem a: $resultado_em_segundos segundos. ";

