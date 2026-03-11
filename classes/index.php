<?php
    require_once "produto.class.php";
    require_once "produto2.class.php";
    require_once "produto3.class.php";
    $produto1 = new Produto();

    $produto1 -> nome = "Lápis";
    $produto1 -> preco = 0.50;

    //Passando parametros por valor(Seguindo ordem de definição
    // do método construtor)
    $produto2 = new Produto2("Caderno", 25.23);

    //Passando parametros por referencia(Não precisa seguir sequencia
    // definida pelo método construtor)
    $produto3 = new Produto2(preco:2.52, nome:"Borracha");
    
    //Mostrar dados que estão no objeto
    echo "Objeto - Produto1 - {$produto1 -> nome}<br>";
    echo "Objeto - Produto2 - {$produto2 -> nome}<br>";
    echo "Objeto - Produto3 - {$produto3 -> nome}<br>";

    //Mostrar dados através do método Exibir()
    $produto2 -> Exibir();
    $produto3 -> Exibir();

    /*Classe Produto 3 com métodos e/ou atributos privados
    Criamos um objeto da classe Produto3, que os atributos são
    privados e métodos públicos*/
    $produto4 = new Produto3("Agenda", 50);

    /*Acessou o valor do atributo nome por meio de um método get,
    por que o atributo é privado e não pode ser acessado fora da classe
    */
    echo $produto4 -> getNome() . "<br>";

    /*Solicitou a alteração do valor do atributo nome por meio de 
    um método set, por que o atributo é privado e não pode ser acessado 
    fora da classe
    */
    $produto4 -> setNome("Agenda 2026");
    echo $produto4 -> getNome() . "<br>";
    echo "Nome do produto: {$produto4->getNome()} <br> 
    Preço: {$produto4->getPreco()}<br>";

    $produto4 -> setPreco(100);
    echo "Nome do produto: {$produto4->getNome()} <br>
    Preço: {$produto4->getPreco()}<br>";

    
    
?>