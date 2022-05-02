<?php
$idade = 20;
$idadeLiberados = 21;
$nome = 'Gabriel';
$numeroDePessoas = 1;

echo "Você só pode entrar se tiver a partir de $idadeLiberados anos ou";
echo " a partir de 16 anos acompanhado" . PHP_EOL;

if ($idade >= $idadeLiberados) {
  echo "Você tem $idade anos." . PHP_EOL;
  echo 'Pode entrar' . PHP_EOL;
} else {
  echo "Você só tem $idade anos. Você não pode entar";
}

echo PHP_EOL;
echo "Adeus!";
