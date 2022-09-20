<?php

use Sammy\Packs\Sami\CommandLineInterface\Console;
use Sammy\Packs\Sami\CommandLineInterface\Parameters;

$module->exports = [
  'name' => 'config-autoload',
  'handler' => function (Parameters $parameters) {
    Console::Success ('Saved ', $parameters->first, "\n");
  }
];
