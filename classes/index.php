<?php
    require_once "produto.class.php";
    require_once "produto2.class.php";
    $produto1 = new Produto();

    $produto1 -> nome = "Lápis";
    $produto1 -> preco = 0.50;

    //echo "<pre>";
    //    var_dump($produto1);
    //echo "</pre>";

    //Passando parametros por valor(Seguindo ordem de definição
    // do método construtor)
    $produto2 = new Produto2("Caderno", 25.23);
    //echo "<pre>";
    //    var_dump($produto2);
    //echo "</pre>";

    //Passando parametros por referencia(Não precisa seguir sequencia
    // definida pelo método construtor)
    $produto3 = new Produto2(preco:2.52, nome:"Borracha");
    //echo "<pre>";
    //    var_dump($produto3);
    //echo "</pre>";

    //Mostrar dados que estão no objeto
    echo "Objeto - Produto1 - {$produto1 -> nome}<br>";
    echo "Objeto - Produto2 - {$produto2 -> nome}<br>";
    echo "Objeto - Produto3 - {$produto3 -> nome}<br>";

    //Mostrar dados através do método Exibir()
    $produto2 -> Exibir();
    $produto3 -> Exibir();
    
?>