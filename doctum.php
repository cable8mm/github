<?php

use Doctum\Doctum;
use Symfony\Component\Finder\Finder;

$iterator = Finder::create()
    ->files()
    ->name('*.php')
    ->in('./src');

return new Doctum($iterator, [
    'title' => 'View Transformer API',
    'build_dir' => __DIR__.'/build',
    'cache_dir' => __DIR__.'/cache',
    'source_dir' => './src',
]);
