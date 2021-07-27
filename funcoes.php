<?php

function sacar(array $conta, float $valorASacar)
{

    if ($valorASacar > $conta['saldo']) {
        exibeMessage('Você não pode sacar');
    } else {
        $conta['saldo'] -= $valorASacar;
    }
    return $conta;
}

function depositar(array $conta, float $valorADepositar)
{

    if ($valorADepositar > 0) {
        $conta['saldo'] += $valorADepositar;
    } else {
        exibeMessage('Você não pode depositar');
    }
    return $conta;
}

function exibeMessage($mensagem)
{
    echo $mensagem . '<br>';
}

function titularComLetrasMaiusculas(array &$conta) {
    $conta['titular'] = mb_strtoupper($conta['titular']);

    return exibeMessage($conta);
}

function exibeConta(array $conta) {

    ['titular' => $titular, 'saldo' => $saldo] = $conta;
    echo "<li>Titular: $titular. Saldo: $saldo </li>";
}