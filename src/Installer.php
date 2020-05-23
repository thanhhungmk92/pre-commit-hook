<?php

namespace Hungpt\PreCommitHook;

class Installer
{
    public static function postInstall()
    {
        if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') {
            system('cmd /c vendor\hungpt\pre-commit-hook\src\setup.bat');
        }
        else {
            system('sh vendor/hungpt/pre-commit-hook/src/setup.sh');
        }
    }
}