<?php
return PhpCsFixer\Config::create()
    ->setRules([
        '@PSR2'                       => true,
        'linebreak_after_opening_tag' => true,
        'ordered_imports'             => true,
    ])
    ->setFinder(
        PhpCsFixer\Finder::create()
            ->name('*.php')
            ->in(__DIR__ . '/src')
    );
