<?php
    require_once "fornecedor.class.php";

    $fornecedor1 = new Fornecedor();

    $fornecedor1 -> setRazao("PaulinhoBala");
    $fornecedor1 -> setCnpj("001.254.298/0001");
    $fornecedor1 -> setCelular("(16) 99739-4757");
    $fornecedor1 -> setEmail("paulinho.bala@gmail.com");

    $fornecedor1 -> Exibir();


?>