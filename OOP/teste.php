<?php
include_once './class/Carro.php';
include_once './class/Cafe.php';

// variaveis globais
$marca = "Toyota";
$modelo = "Etios";
$ano = 2013;

// criando um objeto e instanciando a classe Carro no objeto
$objeto = new Carro($marca, $modelo, $ano);
$objeto->meuCarro();


$nome = "Pretinho Básico";
$preco = 9.50;
$cafezinho = new Cafezinho($nome, $preco);
$cafezinho->preparar();
echo $cafezinho->getPreco();
?>