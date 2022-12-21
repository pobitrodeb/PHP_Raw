<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit385b960f738e6f36e8479bc4a754a8d5
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit385b960f738e6f36e8479bc4a754a8d5::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit385b960f738e6f36e8479bc4a754a8d5::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit385b960f738e6f36e8479bc4a754a8d5::$classMap;

        }, null, ClassLoader::class);
    }
}
