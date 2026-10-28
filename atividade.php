<?php
// Era melhor fazer duas classes separadas do Cliente e do Funcionario ou aplicar o conceito de Herança.
class Produto
{
    public string $nome;
    public float $preco;

    // Métod Construtor
    public function __construct(string $nome, float $preco)
    {
        //O ($this) é uma variável especial dentro da classe que significa "o objeto específico que está executando o código agora".
        $this->nome = $nome;
        $this->preco = $preco;
    }
    // Método para exibir os dados do produto
    public function mostrarProduto(): void
    {
        echo "Produto: {$this->nome} | Preço: R$ " . number_format($this->preco, 2, ',', '.') . "\n";
    }
}
// Colocando dois produtos diferentes
$produto1 = new Produto("Teclado Mecânico", 250.00);
$produto2 = new Produto("Mouse Gamer", 120.50);

// informações dos produtos
$produto1->mostrarProduto();
$produto2->mostrarProduto();
