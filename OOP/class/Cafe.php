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