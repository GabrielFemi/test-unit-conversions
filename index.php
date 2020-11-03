<?php

use Gabrielfemi\UnitConversions\Weight;

include 'vendor/autoload.php';

echo Weight::fromKilograms(100)->toLbs();