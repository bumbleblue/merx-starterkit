<?php

use Kirby\Cms\App;

require __DIR__ . '/kirby/bootstrap.php';

echo (new App())->render();
