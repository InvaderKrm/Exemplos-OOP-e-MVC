<?php

interface Comunicavel {
    public function falar();
}

class Humano implements Comunicavel {
    private $nome;
    
    public function __construct($nome) {
        $this->nome = $nome;
    }
    
    public function falar() {
        echo "{$this->nome}: Speedy, minere selênio!\n";
    }
}

class Robo implements Comunicavel {
    private $modelo;
    
    public function __construct($modelo) {
        $this->modelo = $modelo;
    }
    
    public function falar() {
        echo "{$this->modelo}: Bip-bop! Reconhecimento de voz ativado.\n";
    }
}

function conversar(Comunicavel $comunicante) {
    $comunicante->falar();
}

// Criando objetos
$pessoa = new Humano("Powell");
$robo = new Robo("SPD-13");

// Chamando a mesma função com objetos diferentes
conversar($pessoa);  
conversar($robo); 
?>