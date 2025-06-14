<?php

// MODELO:

class Produto {
    protected $fillable = ['nome', 'preco', 'estoque'];
    
    // verifica se o produto está disponível
    public function estaDisponivel() {
        return $this->estoque > 0;
    }
}
 
// CONTROLADOR:
class ControladorProdutos
{
    // lista todos os produtos
    public function index() {
        $produtos = Produto::all(); // Consulta o Modelo
        // Simula a função view para este exemplo
        return $this->renderView('produtos.index', ['produtos' => $produtos]); // Passa dados para a View
    }
}

?>