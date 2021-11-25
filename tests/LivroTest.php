<?php

namespace Tests;

use MiniCurso\Model\Livro;
use PHPUnit\Framework\TestCase;

class LivroTest extends TestCase
{

    public function testIfLivroHasId()
    {
        $this->assertClassHasAttribute('id', Livro::class);
    }

    public function testIfLivroHasTitulo()
    {
        $this->assertClassHasAttribute('titulo', Livro::class);
    }

    public function testIfLivroHasAnoPublicacao()
    {
        $this->assertClassHasAttribute('anoPublicacao', Livro::class);
    }

    public function testGetIdadeDoLivro()
    {
        $livro = new Livro();
        $livro->anoPublicacao = 1984;
        $this->assertEquals('37',$livro->getIdadeDoLivro($anoAtual = 2021),'A idade não corresponde');
    }

}
