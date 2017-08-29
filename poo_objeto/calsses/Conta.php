<?php


class Conta
{

    public $numeroConta;
    public $dono;
    public $saldo;

    public function deposita($valor)
    {
        $this->saldo += $valor;
    }

    public function saca(float $valor)
    {
        if ($valor <= $this->saldo) {
            $this->saldo -= $valor;
            return true;
        } else {

            return false;

        }
    }
}