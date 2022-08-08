<?php declare(strict_types=1);

namespace Alura\ExtrairClasse;

use Contato;

class Usuario
{
  private $nome;
  private $sobrenome;
  private Contato $contato;

  public function __construct(string $nome, string $sobrenome, Contato $contato)
  {
    $this->nome = $nome;
    $this->sobrenome = $sobrenome;
    $this->contato = $contato;
  }

  public function getNome(): string
  {
    return $this->nome;
  }

  public function getSobrenome(): string
  {
    return $this->sobrenome;
  }

  public function getTipoTelefone(): string
  {
    return $this->contato->getTipoTelefone();
  }

  public function getEnderecoECep(): string
  {
    return $this->contato->getEnderecoECep();
  }

  public function getTelefoneDdd(): string
  {
    return $this->contato->getTelefoneDdd();
  }
}
