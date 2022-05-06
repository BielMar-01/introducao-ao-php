<?php
$peso = 100;
$altura = 1.70;
$imc = $peso / $altura ** 2;

echo "Seu IMC está ";

if ($imc < 18) {
  echo "abaixo";
} elseif ($imc < 25) {
  echo "dentro";
} else {
  echo "acima";
}


echo " do ideal, o seu IMC e de $imc";
