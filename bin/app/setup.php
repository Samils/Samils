<?php

use Sammy\Packs\Sami\CommandLineInterface\Console;
use Sammy\Packs\Sami\CommandLineInterface\Parameters;

$module->exports = [
  'name' => 'setup',
  'handler' => function (Parameters $parameters) {
    Console::Success ('Saved ', $parameters->first, "\n");
  }
];
