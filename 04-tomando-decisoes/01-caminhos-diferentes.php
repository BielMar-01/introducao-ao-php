<?php
$idade = 21;
$idadeLiberados = 21;
$nome = 'Gabriel';

echo "Você só pode entrar se tiver a partir de $idadeLiberados" . PHP_EOL;

if ($idade == $idadeLiberados || $idade > $idadeLiberados) {
  echo "Você tem $idade anos." . PHP_EOL;
  echo 'Pode entrar' . PHP_EOL;;
}

if ($idade >= $idadeLiberados && $nome == 'Gabriel') {
  echo "Meu nome é $nome e tenho $idade anos." . PHP_EOL;
  echo 'Pode entrar';
}
