<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd6dca45d4fe37f226e0d8b9df9ba56ee
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitd6dca45d4fe37f226e0d8b9df9ba56ee::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd6dca45d4fe37f226e0d8b9df9ba56ee::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd6dca45d4fe37f226e0d8b9df9ba56ee::$classMap;

        }, null, ClassLoader::class);
    }
}
