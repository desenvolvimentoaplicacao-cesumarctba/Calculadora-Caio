<?php

include 'polyfill.php';

$x = 1;

while ($x) {

$valor1 = readline (PHP_EOL . 'Primeiro Numero: ' . PHP_EOL);
$escolha = readline ('Escolha a Operacao [+], [-], [/] ou [*] ' . PHP_EOL);
$valor2 = readline ('Segundo Numero: ' . PHP_EOL);
$resultado = 0;

switch ($escolha) {
    case '+':
        $resultado = $valor1 + $valor2;
        break;
    case '-':
        $resultado = $valor1 - $valor2;
        break;
    case '/':
        $resultado = $valor1 / $valor2;
        break;
    case '*':
        $resultado = $valor1 * $valor2;
        break;
    default:
        echo 'Comando Invalido';
        return 0;
}

echo PHP_EOL . PHP_EOL . 'Resultado = ' . $resultado . PHP_EOL;

$opc = readline (PHP_EOL . 'Deseja realizar outra operacao? S/N ' . PHP_EOL . PHP_EOL);
if ($opc == 's' || $opc == 'S'){
    $x = 1;
}else if ($opc == 'n' || $opc == 'N'){
    $x = 0;
}

}