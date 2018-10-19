<?php
/**
 * Created by PhpStorm.
 * User: elminsondeoleobaez
 * Date: 10/18/18
 * Time: 8:15 PM
 */

namespace Elminson\PHPProjectGen;

use Elminson\RandomDots\RandomDots;

require __DIR__ . '/vendor/autoload.php';

$randomdots = new RandomDots();
print_r($randomdots->placeDot("test",3));