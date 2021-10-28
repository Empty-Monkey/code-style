<?php

require_once __DIR__ . '/vendor/autoload.php';

$finder = PhpCsFixer\Finder::create()
    ->in(__DIR__)
    ->ignoreDotFiles(false)
    ->name('.php-cs-fixer.dist.php')
    ->exclude([
        'vendor',
    ])
;

$ruleSet = new \EmptyMonkey\CodeStyle\PhpCsFixer\RuleSet\EmptyMonkeySet();
$config  = new \EmptyMonkey\CodeStyle\PhpCsFixer\Config();

$config
    ->setRules($ruleSet->getRules())
    ->setFinder($finder)
;

return $config;
