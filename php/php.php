<?php 


class Conta{
    
    private $nome;
    private $cpf;
    private $saldo;

    function __construct(string $nome, string $cpf){
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->saldo = 0;
        $this->validador($nome, $cpf);
    }
    
    private function validador($nome, $cpf){
        if(strlen($nome) < 4 || strlen($cpf) < 11 || strlen($cpf) > 14 ){
            echo "invalido cpf ou nome";
            exit();
        }
    }
    public function adicionarSaldo(float $valor):void{
        if($valor > 0){
            $this->saldo = $valor;
            return;
        }
        echo "valor precisa ser positivo";
    }
    public function adicionarNome(string $valor):void{
        $this->nome = $valor; 
    }
};

$conta = new conta("Márcio José Martins Câmara", "123.123.123.12");

$conta->adicionarSaldo(250);



var_dump($conta);