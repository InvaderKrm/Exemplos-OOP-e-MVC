<?php
interface FormaGeometrica {
    public function calcularArea();
}

class Quadrado implements FormaGeometrica {
    private $lado;
    
    public function __construct($lado) {
        $this->lado = $lado;
    }
    
    public function calcularArea() {
        return $this->lado * $this->lado;
    }
    
    public function getLado() {
        return $this->lado;
    }
}

class Circulo implements FormaGeometrica {
    private $raio;
    const PI = 3.14;
    
    public function __construct($raio) {
        $this->raio = $raio;
    }
    public function calcularArea() {
        return self::PI * ($this->raio * $this->raio);
    }
    public function getRaio() {
        return $this->raio;
    }
}

function imprimirArea(FormaGeometrica $forma) {
    $nomeClasse = get_class($forma);
    
    if ($forma instanceof Quadrado) {
        echo "Um quadrado de lado {$forma->getLado()} tem área: ";
    } elseif ($forma instanceof Circulo) {
        echo "Um círculo de raio {$forma->getRaio()} tem área: ";
    }
    
    echo $forma->calcularArea() . "\n";
}

$quadrado = new Quadrado(5);
$circulo = new Circulo(3);

imprimirArea($quadrado); 
imprimirArea($circulo);   

class Triangulo implements FormaGeometrica {
    private $base;
    private $altura;
    
    public function __construct($base, $altura) {
        $this->base = $base;
        $this->altura = $altura;
    }
    
    public function calcularArea() {
        return ($this->base * $this->altura) / 2;
    }
}

$triangulo = new Triangulo(4, 6);
imprimirArea($triangulo); 
?>