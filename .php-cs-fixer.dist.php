<?php

$finder = PhpCsFixer\Finder::create()
    ->in(__DIR__)
    ->ignoreDotFiles(false)
    ->name('.php-cs-fixer.dist.php')
    ->exclude(['vendor'])
;

$config = new PhpCsFixer\Config('Empty Monkey');

$config->setRules([
    '@PSR1'                        => true,
    '@PSR12'                       => true,
    '@PSR2'                        => true,
    '@PhpCsFixer'                  => true,
    'blank_line_after_opening_tag' => true,
    'ordered_imports'              => [
        'sort_algorithm' => 'alpha',
        'imports_order'  => ['const', 'class', 'function'],
    ],
    'ordered_class_elements' => [
        'order' => [
            'use_trait',
            'constant_public',
            'constant_protected',
            'constant_private',
            'property_public',
            'property_protected',
            'property_private',
            'construct',
            'destruct',
            'magic',
            'phpunit',
            'method_public_static',
            'method_protected_static',
            'method_private_static',
            'method_public',
            'method_protected',
            'method_private',
            'method_public_abstract_static',
            'method_protected_abstract_static',
            'method_public_abstract',
            'method_protected_abstract',
        ],
        'sort_algorithm' => 'none',
    ],
    'no_superfluous_phpdoc_tags' => false,
    'declare_equal_normalize'    => [
        'space' => 'single',
    ],
    'yoda_style'             => false,
    'increment_style'        => true,
    'binary_operator_spaces' => [
        'default' => 'align_single_space_minimal',
    ],
    'assign_null_coalescing_to_coalesce_equal' => true,
    'concat_space'                             => [
        'spacing' => 'one',
    ],
    'return_assignment'      => false,
    'class_definition'       => true,
    'phpdoc_no_empty_return' => false,
    'phpdoc_types_order'     => [
        'sort_algorithm'  => 'none',
        'null_adjustment' => 'always_last',
    ],
    'return_type_declaration' => [
        'space_before' => 'none',
    ],
])
    ->setFinder($finder)
;

return $config;
