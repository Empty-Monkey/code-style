# Code Style for Empty Monkey

This package install [PHP-CS-Fixer](https://github.com/FriendsOfPHP/PHP-CS-Fixer) with styling fitted for Empty Monkey.

# Installation

**1. Install package**

`composer require --dev empty-monkey/code-style`

**2. Create config file**

Create file `.php-cs-fixer.dist.php` to your project's root directory and copy the content from here (or download the [file itself](./.php-cs-fixer.dist.php)):

```php
<?php

require_once __DIR__ . '/vendor/autoload.php';

$finder = PhpCsFixer\Finder::create()
    ->in(__DIR__)
    ->ignoreDotFiles(false)
    ->name('.php-cs-fixer.dist.php')
    ->exclude(['vendor'])
;

$ruleSet = new \EmptyMonkey\CodeStyle\PhpCsFixer\RuleSet\EmptyMonkeySet();
$config  = new \EmptyMonkey\CodeStyle\PhpCsFixer\Config();

$config
    ->setRules($ruleSet->getRules())
    ->setFinder($finder)
;

return $config;
```

**3. Make it easy to run**

Add support for your composer to run styling by adding this to your `composer.json`.

```json
    "scripts": {
        "style": [
            "php vendor/friendsofphp/php-cs-fixer/php-cs-fixer fix --using-cache=no --config=.php-cs-fixer.dist.php -v"
        ]
    }
```
