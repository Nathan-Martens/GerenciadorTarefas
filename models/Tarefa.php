<?php

include "Responsavel.php";

class Tarefas
{
    private int $id;
    private string $titulo;
    private string $descricao;
    private Responsavel $responsavel;

    public function __construct(?int $id = null, string $titulo, string $descricao, Responsavel $responsavel)
    {
        $this->setId($id);
        $this->setTitulo($titulo);
        $this->setDescricao($descricao);
        $this->setResponsavel($responsavel);
    }

    public function setId(?int $id): void
    {
        $this->id = $id;
    }
    public function setTitulo(string $titulo): void
    {
        $this->titulo = $titulo;
    }
    public function setDescricao(string $descricao): void
    {
        $this->descricao = $descricao;
    }
    public function setResponsavel(Responsavel $responsavel): void
    {
        $this->responsavel = $responsavel;
    }

    public function getId(): ?int
    {
        return $this->id;
    }
    public function getTitulo(): string
    {
        return $this->titulo;
    }
    public function getDescricao(): string
    {
        return $this->descricao;
    }
    public function getResponsavel(): Responsavel
    {
        return $this->responsavel;
    }
}
