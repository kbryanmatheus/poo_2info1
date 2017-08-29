<?php
/**
 * Created by PhpStorm.
 * User: aluno
 * Date: 29/08/17
 * Time: 16:10
 */

require 'calsses/Conta.php';

$minhaConta = new Conta();



$minhaConta->dono = "Moura Moura da Silva Silva Costa ";
$minhaConta->numeroConta = "15627";
$minhaConta->saldo = 10.00;

$minhaConta->deposita(1902);

$conseguiSacar = $minhaConta->saca(900);

    if ($conseguiSacar == true){
        echo "consegui sacar";
    }else{
        echo 'saldo insufisciente bobalhão ';
    }

echo "\n O cliente {$minhaConta->dono} possui saldo de {$minhaConta->saldo}";