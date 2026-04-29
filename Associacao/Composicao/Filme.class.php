<?php

class Filme {
    private $titulo;
    private $ano;

    public function __construct($titulo, $ano) {
        $this->titulo = $titulo;
        $this->ano = $ano;
    }

    // GETTERS
    public function getTitulo() {
        return $this->titulo;
    }

    public function getAno() {
        return $this->ano;
    }

    // SETTERS
    public function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    public function setAno($ano) {
        $this->ano = $ano;
    }
}
?>