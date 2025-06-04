<?php
// Classe mãe
class Animal {
    public function __construct(public $nome) {}
    public function comer() {
        echo "{$this->nome} está comendo\n";
    }
}

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

// Criando e usando os objetos
$animal = new Animal("Bichinho");
$cachorro = new Cachorro("Dirk", "Labrador");

$animal->comer();       // Método da classe Animal
$cachorro->comer();     // Método herdado
$cachorro->latir();     // Método específico
?>