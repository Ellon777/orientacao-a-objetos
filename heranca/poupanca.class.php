<?php
    class Poupanca extends Conta {
        public function __construct (
            private int $aniversario = 0,
            int $banco = 0,
            string $agencia = "",
            string $conta = "",
            float $saldo = 0.00
        ) 
        {
            parent:: __construct(
                $banco = 0,
                $agencia = "",
                $conta = "",
                $saldo = 0.00
            );

        }

        public function getAniversario() {
            return $this -> aniversario;
        }

        public function setAniversario($aniversario) {
            $this -> aniversario = $aniversario;
        }
    }
?>