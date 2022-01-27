<?php

use EmptyMonkey\CodeStyle\PhpCsFixer\RuleSet\EmptyMonkeySet;

require_once __DIR__ . '/vendor/autoload.php';

$finder = PhpCsFixer\Finder::create()
    ->in(__DIR__)
    ->ignoreDotFiles(false)
    ->name('.php-cs-fixer.dist.php')
    ->exclude([
        'vendor',
    ])
;

$config = new \EmptyMonkey\CodeStyle\PhpCsFixer\Config();

$config
    ->registerCustomRuleSets([
        EmptyMonkeySet::NAME => EmptyMonkeySet::class,
    ])
    ->setRules([
        EmptyMonkeySet::NAME => true,
    ])
    ->setFinder($finder)
;

return $config;
