<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Cafeteria</title>
    <style>
        @font-face{
            font-family: 'Cutehere';
            src: url('fontes/Cute Here.otf');
        }
        @font-face{
            font-family: 'Cutewritten';
            src: url('fontes/CuteFont.ttf');
        }
        body {
            font-family: 'Cutehere';
            background-image: url(imagens/fundo-cafeteria.jpg);
            background-size: cover;
            color: #333;
            padding: 20px;
        }
        .container {
            font-family: 'Cutehere';
            font-size: large;
            background-color: rgba(235, 221, 215, 0.84);
            padding: 20px;
            border-radius: 10px;
            width: 500px;
            margin: auto;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.54);
        }
        .total {
            text-align: center;
            font-weight: bold;
        }
        h1 {
            text-align: center;
            color: #6b4226;
        }
        pre {
            font-family: 'Cutewritten';
            background-color: #fcf0e6;
            padding: 15px;
            border-left: 5px solid #c79d66;
            border-radius: 5px;
            white-space: pre-wrap;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Cafeteria Virtual</h1>
        <pre>
<?php

class Cafezinho {
    protected $nome;
    protected $temperatura;
    protected $preco;
    protected $ingredientes = [];
    
    public function __construct($nome, $preco, $temperatura = 'quente') {
        $this->nome = $nome;
        $this->preco = $preco;
        $this->temperatura = $temperatura;
    }
    
    public function adicionarIngrediente($ingrediente, $quantidade) {
        $this->ingredientes[$ingrediente] = $quantidade;
    }
    
    public function preparar() {
        echo "Preparando {$this->nome}...\n";
    }
    
    public function servir() {
        echo "Servindo um delicioso {$this->nome} {$this->temperatura} por R$ {$this->preco}\n";
        echo "Ingredientes:\n";
        foreach ($this->ingredientes as $ingrediente => $quantidade) {
            echo "- {$quantidade} de {$ingrediente}\n";
        }
    }
    
    public function getPreco() {
        return $this->preco;
    }
}

// Classes específicas para cada tipo de café
class Americano extends Cafezinho {
    public function __construct() {
        parent::__construct('Americano', 8.50);
        $this->adicionarIngrediente('água', '200ml');
        $this->adicionarIngrediente('café expresso', '50ml');
    }
    
    public function preparar() {
        parent::preparar();
        echo "Adicionando água quente ao café expresso!\n";
    }
}

class Cappuccino extends Cafezinho {
    public function __construct() {
        parent::__construct('Cappuccino', 12.00);
        $this->adicionarIngrediente('café expresso', '50ml');
        $this->adicionarIngrediente('leite vaporizado', '100ml');
        $this->adicionarIngrediente('espuma de leite', '50ml');
    }
    
    public function preparar() {
        parent::preparar();
        echo "Misturando café expresso com leite vaporizado e espuma!\n";
    }
}

class Mocha extends Cafezinho {
    public function __construct() {
        parent::__construct('Mocha', 16.00);
        $this->adicionarIngrediente('café expresso', '50ml');
        $this->adicionarIngrediente('chocolate', '30ml');
        $this->adicionarIngrediente('leite vaporizado', '100ml');
        $this->adicionarIngrediente('chantilly', '20ml');
    }
    
    public function preparar() {
        parent::preparar();
        echo "Adicionando chocolate e chantilly ao café!\n";
    }
}

// Criando os cafezinhos!
$americano = new Americano();
$cappuccino = new Cappuccino();
$mocha = new Mocha();

// Preparando e servindo os cafés...
$americano->preparar();
$americano->servir();

echo "\n";

$cappuccino->preparar();
$cappuccino->servir();

echo "\n";

$mocha->preparar();
$mocha->servir();

// Calculando o total de um pedido
$totalPedido = $americano->getPreco() + $cappuccino->getPreco() + $mocha->getPreco();
?>
            <div class="total">
                <p>Total do Pedido: R$<?php echo number_format($totalPedido, 2, ',', '.'); ?></p>
            </div>
        </pre>
    </div>
</body>
</html>
