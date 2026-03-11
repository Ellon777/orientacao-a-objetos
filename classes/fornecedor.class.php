<?php
    class Fornecedor {
        public function __construct(
            private string $razaosocial = "",
            private string $cnpj = "",
            private string $celular = "",
            private string $email = ""){}
    
        public function getRazao(){
            return $this->razaosocial;
        }
        public function getCnpj(){
            return $this->cnpj;
        }
        public function getCelular(){
            return $this->celular;
        }
        public function getEmail(){
            return $this->email;
        }
        public function setRazao(string $razaosocial){
            $this->razaosocial = $razaosocial;
        }
        public function setCnpj(string $cnpj){
            $this->cnpj = $cnpj;
        }
        public function setCelular(string $celular){
            $this->celular = $celular;
        }
        public function setEmail(string $email){
            $this->email = $email;
        }
        public function Exibir(){
            echo "$this->razaosocial <br> $this->cnpj<br>
            $this->celular <br> $this->email<br>";
        }
    }
?>