<?php
// Classe mãe
class Animal {
    public function __construct(public $nome) {}
    public function comer() {
        echo "{$this->nome} está comendo\n";
    }
}