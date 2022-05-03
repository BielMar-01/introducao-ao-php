<?php
$idade = 20;
$idadeLiberados = 21;
$nome = 'Gabriel';
$numeroDePessoas = 1;

echo "Você só pode entrar se tiver a partir de $idadeLiberados anos ou";
echo " a partir de 16 anos acompanhado" . PHP_EOL;

if ($idade >= $idadeLiberados) {
  echo "Você tem $idade anos. Pode entrar sozinho.";
} elseif ($idade >= 16 && $numeroDePessoas > 1) { // pode ser else if, junto ou separado
  echo "Você tem $idade anos, está acompanhado(a), então pode entrar.";
} else {
  echo "Você só tem $idade anos. Você não pode entrar";
  echo PHP_EOL . "É uma pena";
}

echo PHP_EOL;
echo "Adeus!";
