<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit76772a6c5c810ef48e4a408ab035bf9c
{
    public static $classMap = array (
        'PHPGangsta_GoogleAuthenticator' => __DIR__ . '/../..' . '/PHPGangsta/GoogleAuthenticator.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit76772a6c5c810ef48e4a408ab035bf9c::$classMap;

        }, null, ClassLoader::class);
    }
}
