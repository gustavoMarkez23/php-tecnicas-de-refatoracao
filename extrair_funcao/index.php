<?php declare(strict_types=1);

$saldos = [
  'Giovanni' => 3000,
  'Erika' => 5000,
];

function exibeErro(){
  echo "<p>Correntista não existente.</p>".PHP_EOL;
}

function exibeSaldo($saldo){
  echo "<p>O saldo do Giovanni é: ".$saldo."</p>".PHP_EOL;
}

function exibeSaldoCorrentista(string $nome, array $saldos){
  if (array_key_exists($nome, $saldos)){
    exibeSaldo($saldos[$nome]);
  }else 
    exibeErro();
}

exibeSaldoCorrentista("Giovanni", $saldos);