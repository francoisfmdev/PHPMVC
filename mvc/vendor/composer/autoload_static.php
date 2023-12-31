<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8ecd23f8ad3eaf9b134cf59f0fa73ef9
{
    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'Router\\' => 7,
        ),
        'D' => 
        array (
            'Database\\' => 9,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Router\\' => 
        array (
            0 => __DIR__ . '/../..' . '/routes',
        ),
        'Database\\' => 
        array (
            0 => __DIR__ . '/../..' . '/database',
        ),
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit8ecd23f8ad3eaf9b134cf59f0fa73ef9::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8ecd23f8ad3eaf9b134cf59f0fa73ef9::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit8ecd23f8ad3eaf9b134cf59f0fa73ef9::$classMap;

        }, null, ClassLoader::class);
    }
}
