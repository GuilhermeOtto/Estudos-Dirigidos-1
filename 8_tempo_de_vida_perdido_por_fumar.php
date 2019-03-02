<?php

print "\n Digite a quantidade de cigarros que você fuma por dia: ";
$cigarros_fumados = (int) fgets (STDIN);

print "\n Digite a quantidade de anos que se passaram fumando: ";
$anos_fumados     = (float) fgets (STDIN);

$dias_perdidos    = ((($cigarros_fumados * 10) /60 ) / 24 ) * ($anos_fumados * 365);

print "\n \n  Foram perdidos cerca de $dias_perdidos dia(s) devido ao ato de fumar cigarros.";
