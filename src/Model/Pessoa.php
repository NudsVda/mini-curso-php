<?php

namespace MiniCurso\Model;

class Pessoa 
{

    private $nome;
    private $idade;

    public function __construct($nome,$idade)
    {
        $this->nome = $nome;
        $this->idade = $idade;
    }

}