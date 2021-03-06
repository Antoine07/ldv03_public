<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8fb91c95f5495a6e752e7259b35a8053
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Shipping\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Shipping\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8fb91c95f5495a6e752e7259b35a8053::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8fb91c95f5495a6e752e7259b35a8053::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit8fb91c95f5495a6e752e7259b35a8053::$classMap;

        }, null, ClassLoader::class);
    }
}
