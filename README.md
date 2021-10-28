# Code Style for Empty Monkey

This package install [PHP-CS-Fixer](https://github.com/FriendsOfPHP/PHP-CS-Fixer) with styling fitted for Empty Monkey.

# Installation

**1. Install package**

`composer require --dev empty-monkey/code-style`

**2. Create config file**

Create file `.php-cs-fixer.dist.php` to your project's root directory and copy the content from here:

```php
<?php

require_once __DIR__ . '/vendor/autoload.php';

$finder = PhpCsFixer\Finder::create()
    ->in(__DIR__)
    ->ignoreDotFiles(false)
    ->name('.php-cs-fixer.dist.php')
    ->exclude([
        'vendor',
        'bootstrap/cache',
        'storage',
    ])
;

$ruleSet = new \EmptyMonkey\CodeStyle\PhpCsFixer\RuleSet\EmptyMonkeySet();
$config  = new \EmptyMonkey\CodeStyle\PhpCsFixer\Config();

$config
    ->setRules($ruleSet->getRules())
    ->setFinder($finder)
;

return $config;
```

**Note:** Excluding `bootstrap/cache` and `storage` are very laravel specific excludes. Empty Monkey uses Laravel a lot, but feel free to remove those lines if they don't suit your needs.

**3. Make it easy to run**

Add support for your composer to run styling by adding this to your `composer.json`. Now you can run the styles to all your files by running `composer style`.

```json
    "scripts": {
        "style": [
            "php vendor/friendsofphp/php-cs-fixer/php-cs-fixer fix --using-cache=no --config=.php-cs-fixer.dist.php -v"
        ]
    }
```
