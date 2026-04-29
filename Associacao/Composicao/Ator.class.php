<?php

class Ator {
    private $nome;
    private $nacionalidade;

    public function __construct($nome, $nacionalidade) {
        $this->nome = $nome;
        $this->nacionalidade = $nacionalidade;
    }

    // GETTERS
    public function getNome() {
        return $this->nome;
    }

    public function getNacionalidade() {
        return $this->nacionalidade;
    }

    // SETTERS
    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setNacionalidade($nacionalidade) {
        $this->nacionalidade = $nacionalidade;
    }
}
?>