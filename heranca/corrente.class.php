<?php
    class Corrente extends Conta {
        public function __construct (
            private float $limite = 0.00,
            int $banco = 0,
            string $agencia = "",
            string $conta = "",
            float $saldo = 0.00
        ) 
        {
            parent:: __construct(
                $banco,
                $agencia,
                $conta,
                $saldo
            );
        }
        public function getLimite() {
            return $this -> limite;
        }

        public function setLimite($limite) {
            $this -> limite = $limite;
        }

        public function Sacar(float $valor){
            if($this -> saldo + $this -> limite >= $valor){
                parent:: Sacar($valor);
            }
        }
    }
?>