<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit45c8cea5dc555a1fbe17330c55e7b37e
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

        spl_autoload_register(array('ComposerAutoloaderInit45c8cea5dc555a1fbe17330c55e7b37e', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit45c8cea5dc555a1fbe17330c55e7b37e', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit45c8cea5dc555a1fbe17330c55e7b37e::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}