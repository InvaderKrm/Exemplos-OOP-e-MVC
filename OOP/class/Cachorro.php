<?php
// Classe filha
class Cachorro extends Animal {
    private $raca;
    public function __construct($nome, $raca) {
        parent::__construct($nome);
        $this->raca = $raca;
    }
    public function latir() {
        echo "{$this->nome} (raça {$this->raca}) diz: Au Au!\n";
    }
}