<?php

class Gato extends Animal {
    private $nome;
    private $raca;
    private $idade;
    private $cor;
    
    public function __construct($nome, $raca, $idade, $cor) {
        $this->nome = $nome;
        $this->raca = $raca;
        $this->idade = $idade;
        $this->cor = $cor;
    }

    public function miar() {
        echo "{$this->nome} diz: Miaaaau!\n";
    }
    
    public function ronronar() {
        echo "{$this->nome} está ronronando... Prrrrr\n";
    }
    
    public function dormir($horas) {
        echo "{$this->nome} está dormindo por {$horas} horas! :o\n";
    }

    public function getRaca() {
        return $this->raca;
    }
    
    public function infos() {
        echo "Nome: {$this->nome}, Raça: {$this->raca}, Idade: {$this->idade} anos, Cor: {$this->cor}\n";
    }
}