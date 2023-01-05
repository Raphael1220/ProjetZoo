<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd0a5822651214a06fc3b57a7d9f55d23
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
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd0a5822651214a06fc3b57a7d9f55d23::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd0a5822651214a06fc3b57a7d9f55d23::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd0a5822651214a06fc3b57a7d9f55d23::$classMap;

        }, null, ClassLoader::class);
    }
}
