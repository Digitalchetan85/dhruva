<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit93c6a4b20c13c97b37d0dfd9a29d5bd4
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

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit93c6a4b20c13c97b37d0dfd9a29d5bd4::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit93c6a4b20c13c97b37d0dfd9a29d5bd4::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit93c6a4b20c13c97b37d0dfd9a29d5bd4::$classMap;

        }, null, ClassLoader::class);
    }
}
