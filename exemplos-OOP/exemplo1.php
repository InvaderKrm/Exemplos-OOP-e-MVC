<?php

class Carro {
    public $marca;
    public $modelo;
    public $ano;
    private $quilometragem;
    
    // Método para construir o carro
    public function __construct($marca, $modelo, $ano) {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->ano = $ano;
        $this->quilometragem = 0;
    }
    
    // Comportamentos do carro
    public function acelerar() {
        echo "O {$this->modelo} está acelerando!\n";
    }
    public function dirigir($km) {
        $this->quilometragem += $km;
        echo "Dirigiu {$km} km. Quilometragem total: {$this->quilometragem} km\n";
    }
    
    // Método para obter quilometragem - encapsulamento
    public function getQuilometragem() {
        return $this->quilometragem;
    }
}

// Criando um objeto... (instância da classe Carro)
$meuCarro = new Carro("Toyota", "Etios", 2013);

$meuCarro->acelerar();
$meuCarro->dirigir(50);
$meuCarro->dirigir(30);

echo "Quilometragem total: " . $meuCarro->getQuilometragem() . " km\n";

?>