<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitf91e6780f6bcf55f01e8903bc449b138
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        require __DIR__ . '/platform_check.php';

        spl_autoload_register(array('ComposerAutoloaderInitf91e6780f6bcf55f01e8903bc449b138', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitf91e6780f6bcf55f01e8903bc449b138', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitf91e6780f6bcf55f01e8903bc449b138::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
