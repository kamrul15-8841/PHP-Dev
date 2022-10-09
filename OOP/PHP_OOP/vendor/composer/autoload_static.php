<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitdf3119b44d9d4474f8927883bf2fb6ac
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitdf3119b44d9d4474f8927883bf2fb6ac::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitdf3119b44d9d4474f8927883bf2fb6ac::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitdf3119b44d9d4474f8927883bf2fb6ac::$classMap;

        }, null, ClassLoader::class);
    }
}