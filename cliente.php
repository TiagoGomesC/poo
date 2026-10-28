<?php 
//aqui estou criando a classe cliente
class Clientes { 
    //atributos:
    public string $nome;
    public int $idade;
    public float $peso;

    //aqui estou criando o método construtor
    public function __construct($nome, $idade, $peso){
        $this->nome =$nome;
        $this->idade = $idade;
        $this->peso = $peso;
        $this->cadastrar();
    }
    //Métodos: construct, cadastra e mostrarDados — São as funções dentro da classe, oq faz acontecer
    
    public function cadastrar(){
        echo "Cliente {$this->nome} cadastrado com sucesso!";
    }

    public function mostrarDados(){
        echo "\nDados do cliente: \n";
        echo "Nome: " . $this->nome . "\n";
        echo "Idade: " . $this->idade . "\n";
        echo "Peso: " . $this->peso . "\n";
    }
}

//aqui está sendo usado o __construct:
$c1 = new Clientes("Terere", 16, 70);
$c1->mostrarDados();

$c2 = new Clientes("Tiguigo", 17, 70);
$c2->mostrarDados();

//aqui não:
//$c3 = new Cliente;
//$c3->nome = "Eloá";
//$c3->idade = 16;
//$c3->peso = 70;
//$c3->mostrarDados();
?>
