<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit20f003d6cd08cf076e65800d907a858b
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit20f003d6cd08cf076e65800d907a858b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit20f003d6cd08cf076e65800d907a858b::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit20f003d6cd08cf076e65800d907a858b::$classMap;

        }, null, ClassLoader::class);
    }
}
