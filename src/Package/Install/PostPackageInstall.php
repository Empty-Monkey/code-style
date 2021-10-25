<?php
declare(strict_types = 1);

namespace EmptyMonkey\CodeStyle\Package\Install;

use Composer\Installer\PackageEvent;
use Composer\Script\Event;

class PostPackageInstall
{
    /**
     * @param \Composer\Installer\PackageEvent $event
     */
    public static function postPackageInstall(Event $event)
    {

    }
}
