<?php

declare(strict_types = 1);

namespace EmptyMonkey\CodeStyle\PhpCsFixer;

class Config extends \PhpCsFixer\Config
{
    public function __construct(string $name = 'Empty Monkey')
    {
        parent::__construct($name);
    }
}
