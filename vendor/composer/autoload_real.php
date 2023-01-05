<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitd0a5822651214a06fc3b57a7d9f55d23
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

        spl_autoload_register(array('ComposerAutoloaderInitd0a5822651214a06fc3b57a7d9f55d23', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitd0a5822651214a06fc3b57a7d9f55d23', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitd0a5822651214a06fc3b57a7d9f55d23::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}