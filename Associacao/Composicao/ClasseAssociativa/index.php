<?php 
    require_once "Filme.class.php";
    require_once "Ator.class.php";
    require_once "Atuacao.class.php";

    $ator = new Ator("Leonardo DiCaprio", "Norte-Americano");
    $filme = new Filme("Titanic", 1997);
    $atuacao = new Atuacao("Jack", $ator, $filme);

    echo "Ator: {$atuacao->getAtor()->getNome()}<br>";
    echo "Nacionalidade: {$atuacao->getAtor()->getNacionalidade()}<br>";
    echo "Filme: {$atuacao->getFilme()->getTitulo()}<br>";
    echo "Ano: {$atuacao->getFilme()->getAno()}<br>";
    echo "Papel: {$atuacao->getPapel()}<br>";

?>