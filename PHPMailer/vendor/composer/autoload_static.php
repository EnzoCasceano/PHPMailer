<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf91e6780f6bcf55f01e8903bc449b138
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitf91e6780f6bcf55f01e8903bc449b138::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf91e6780f6bcf55f01e8903bc449b138::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitf91e6780f6bcf55f01e8903bc449b138::$classMap;

        }, null, ClassLoader::class);
    }
}