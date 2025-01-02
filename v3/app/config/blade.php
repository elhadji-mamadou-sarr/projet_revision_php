<?php

use Jenssegers\Blade\Blade;

require_once __DIR__ . '/../../vendor/autoload.php';

$views = __DIR__ . '/../views';
$cache = __DIR__ . '/../../storage/cache';

// Initialisation de Blade
$blade = new Blade($views, $cache);

return $blade;
