<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit028d66ef10925dd1d1994cd31a30353a
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit028d66ef10925dd1d1994cd31a30353a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit028d66ef10925dd1d1994cd31a30353a::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
