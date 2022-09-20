<?php

use Sammy\Packs\Sami\CommandLineInterface\Console;
use Sammy\Packs\Sami\CommandLineInterface\Parameters;

$module->exports = [
  'name' => 'map',
  'handler' => function (Parameters $parameters) {

    $params = $parameters->all ();

    print_r($params);

    Console::Success ('Hello, World..!');
  }
];
