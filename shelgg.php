#!/usr/bin/env php
<?php

// https://gist.github.com/mrclay/1935230
spl_autoload_register(function ($class) {
    $pieces = explode('\\', ltrim($class, '\\'));
    $pieces[count($pieces) - 1] = strtr($pieces[count($pieces) - 1], '_', '/');
    $file = __DIR__ . '/src/' . implode('/', $pieces) . '.php';
    is_readable($file) && (require $file);
});

$cli = new \MrClay\Cli(false);

echo "Nothing here yet.\n";
echo "\n";
