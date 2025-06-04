<?php
// classe
class Carro {
    // atributos
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
    
    // metodos/acoes da entidade da classe Carro
    public function meuCarro() {
        echo "Seu carro é um {$this->marca} {$this->modelo} {$this->ano}!\n";
    }
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