<?php
    //sempre fazer require da classe pai antes das classes filhas
    require_once "conta.class.php";
    require_once "corrente.class.php";
    require_once "poupanca.class.php";

    $conta1 = new Conta(1, "123-2", "12345-67", 1000);
    /*echo "<pre>";
    var_dump($conta1);
    echo "</pre>";*/
    

    //não é possivel acessar atributos da classe conta porque são protegidos
    //echo $conta1 -> banco;
    echo "Banco: {$conta1 -> getBanco()} <br>";

    $corrente1 = new Corrente(500, 1, "345-1", "54321-87", 1500);
    /*echo "<pre>";
    var_dump($corrente1);
    echo "</pre>";*/


    echo "Valor em conta: ";
    echo number_format ($corrente1 -> getSaldo(), 2, ",", ".") . "<br>";
    $retorno = $corrente1 -> Depositar(150.57);
    if(is_string($retorno)){
        echo "{$retorno}<br>";
    }
    else {
        echo "Novo valor após depósito: ";
        echo number_format($retorno, 2, ",", ".") . "<br>";
    }

    $retorno = $corrente1 -> Sacar(1650,57);
    if(is_string($retorno)){
        echo "{$retorno}<br>";
    }
    else {
        echo "Novo valor após saque: ";
        echo number_format($retorno, 2, ",", ".") . "<br>";
    }
?>