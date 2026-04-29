<?php

require_once "Ator.class.php";
require_once "Filme.class.php";

class Atuacao {
    private $papel;
    private $ator;
    private $filme;

    public function __construct($papel, $ator, $filme) {
        $this->papel = $papel;
        $this->ator = $ator;
        $this->filme = $filme;
    }

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