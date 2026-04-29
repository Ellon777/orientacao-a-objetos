<?php

class Ator {

    public function __construct(
        private string $nome = "",
        private string $nacionalidade = "",
        private array $filmes = array()
    ){}

    // GETTERS
    public function getNome() {
        return $this->nome;
    }

    public function getNacionalidade() {
        return $this->nacionalidade;
    }

    public function getFilmes() {
        return $this->filmes;
    }

    // SETTERS
    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setNacionalidade($nacionalidade) {
        $this->nacionalidade = $nacionalidade;
    }

    public function setFilmes($filme) {
        $this->filmes[] = $filme;
    }
}
?>