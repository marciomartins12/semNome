<?php
namespace class;
class Cpf{
    private string $cpf;

    public function __construct($cpf) {
        $this->cpf = $cpf;
    }

    public function getCpf(){
        return $this->cpf;
    }
};
