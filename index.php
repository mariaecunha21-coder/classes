<?php

class Pessoa {

    private string $nome;
    private int $idade;
    private string $cpf;

    public function __construct(
        string $nome,
        int $idade,
        string $cpf
    ) {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->cpf = $cpf;
    }
}

$pessoa01 = new Pessoa('dudinha', 17, '11009610201');

class Produtos {

    private string $nome;
    private float $preco;
    private int $quantidade;

    public function __construct(
        string $nome,
        float $preco,
        int $quantidade
    ) {
        $this->nome = $nome;
        $this->preco = $preco;
        $this->quantidade = $quantidade;
    }

    public function pegarNome(): string {
        return $this->nome;
    }

    public function pegarPreco(): float {
        return $this->preco;
    }

    public function pegarQuantidade(): int {
        return $this->quantidade;
    }
}

$produto01 = new Produtos('carregador', 1000.00, 10);

?>

?>
