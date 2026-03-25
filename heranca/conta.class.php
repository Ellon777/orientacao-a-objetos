<?php
    class Conta{
        public function __construct (
            protected int $banco = 0,
            protected string $agencia = "",
            protected string $conta ="",
            protected float $saldo = 0.00
        ) {}

        public function getBanco() {
            return $this->banco;
        }

        public function getAgencia() {
            return $this->agencia;
        }

        public function getConta() {
            return $this->conta;
        }

        public function getSaldo() {
            return $this->saldo;
        }

        public function setBanco(string $banco){
            $this->banco = $banco;
        }

        public function setAgencia(float $agencia){
            $this->agencia = $agencia;
        }

        public function setConta(string $conta){
            $this->conta = $conta;
        }

        public function setSaldo(float $saldo){
            $this->saldo = $saldo;
        }

        public function Depositar(float $valor){
            if($valor <= 0){
                echo "Valor inválido para depósito<br>";
            }
            else {
                $this -> saldo += $valor;
                return $this->getSaldo();
            }
        }
    }
?>