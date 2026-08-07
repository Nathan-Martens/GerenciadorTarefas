<?php

class Tarefas
{
    private int $id;
    private string $titulo;
    private string $descricao;
    private Responsavel $responsavel;
    private string $status;

    // public function __construct(?int $id = null, string $titulo, string $descricao, Responsavel $responsavel)
    public function __construct(string $titulo, string $descricao, Responsavel $responsavel, string $status)
    {
        //$this->setId($id);
        $this->setTitulo($titulo);
        $this->setDescricao($descricao);
        $this->setResponsavel($responsavel);
        $this->setStatus($status);
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

    public function setStatus(string $status): void
    {
        $this->status = $status;
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

    public function getStatus(): string
    {
        return $this->status;
    }

}
