<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2ae90bc4306ec862d99ae9454f266449
{
    public static $prefixLengthsPsr4 = array (
        'c' => 
        array (
            'classes\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'classes\\' => 
        array (
            0 => __DIR__ . '/../..' . '/classes',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit2ae90bc4306ec862d99ae9454f266449::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2ae90bc4306ec862d99ae9454f266449::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit2ae90bc4306ec862d99ae9454f266449::$classMap;

        }, null, ClassLoader::class);
    }
}
