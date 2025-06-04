<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Simulando um Carro</title>
    <style>
        body {
            background-image: url(imagens/fundo-carros.jpg);
            background-size: cover;
            font-family: Arial, sans-serif;
            padding: 20px;
        }
        .container {
            background-color: rgba(255, 255, 255, 0.62);
            padding: 20px;
            border-radius: 10px;
            width: 500px;
            margin: auto;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.54);
        }
        h1 {
            color: #333;
            text-align: center;
        }
        pre {
            background-color: #eee;
            padding: 10px;
            border-radius: 5px;
            font-family: Arial, sans-serif;
            white-space: pre-wrap;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Simulando um Carro</h1>
        <pre>

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

// Criando um objeto... (instância da classe Carro)
$meuCarro = new Carro("Toyota", "Etios", 2013);

$meuCarro->meuCarro();
$meuCarro->acelerar();
$meuCarro->dirigir(50);
$meuCarro->dirigir(30);

echo "Quilometragem total dirigida: " . $meuCarro->getQuilometragem() . " km";

?>

        </pre>
    </div>
</body>
</html>