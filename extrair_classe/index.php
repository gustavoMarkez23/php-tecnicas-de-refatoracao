<?php declare(strict_types=1);

namespace Alura\ExtrairClasse;

use Contato;

require 'Usuario.php';
require 'Contato.php';

$usuario = new Usuario("Giovanni", "Tempobono", new Contato("Rua Vergueiro 3185", "04101-300", "5571-2751", "11"));

echo $usuario->getNome().PHP_EOL;
echo $usuario->getTelefoneDdd().PHP_EOL;
