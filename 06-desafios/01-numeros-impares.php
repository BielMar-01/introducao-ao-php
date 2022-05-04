<?php

//imprimir numeros impares de 0 a 100 

// Minha solução
for ($i = 0; $i <= 100; $i++) {
  if ($i % 2 == 1) {
    echo $i . PHP_EOL;
  }
}

echo PHP_EOL;

// Solução do instrutor
for ($contador = 1; $contador < 100; $contador++) {
  if ($contador % 2 != 0) {
    echo $contador . PHP_EOL;
  }
}
