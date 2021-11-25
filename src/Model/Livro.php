<?php

namespace MiniCurso\Model;

class Livro
{

    private int $id;
    
    private string $titulo;

    public int $anoPublicacao;

    public function getIdadeDoLivro(int $anoAtual) : int
    {
        return $anoAtual - $this->anoPublicacao;
    }

}