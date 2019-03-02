<?php

print "\n Digite a temperatura em graus Celcius (°C): ";
$celcius    = (float) fgets (STDIN);

$fahrenheit = 9 * $celcius / 5 + 32;

print "\n $celcius °C equivalem à $fahrenheit °F \n\n";
