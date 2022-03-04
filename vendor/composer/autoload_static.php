<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd68f30db6b5ecccbdaa8778d2c885bfb
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitd68f30db6b5ecccbdaa8778d2c885bfb::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd68f30db6b5ecccbdaa8778d2c885bfb::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd68f30db6b5ecccbdaa8778d2c885bfb::$classMap;

        }, null, ClassLoader::class);
    }
}
