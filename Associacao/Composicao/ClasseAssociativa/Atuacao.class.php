<?php

require_once "Ator.class.php";
require_once "Filme.class.php";

class Atuacao {

    public function __construct(
        private string $papel = "",
        private ?Ator $ator = null,
        private ?Filme $filme = null
    ){}

    // GETTERS
    public function getPapel() {
        return $this->papel;
    }

    public function getAtor() {
        return $this->ator;
    }

    public function getFilme() {
        return $this->filme;
    }

    // SETTERS
    public function setPapel($papel) {
        $this->papel = $papel;
    }

    public function setAtor($ator) {
        $this->ator = $ator;
    }

    public function setFilme($filme) {
        $this->filme = $filme;
    }
}
?>