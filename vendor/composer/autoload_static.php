<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita1d8ca5de29142f4efeda1b1eb096391
{
    public static $files = array (
        'd6909b5e047c191e1f436380f2713803' => __DIR__ . '/..' . '/christopherarter/wp-middleware/src/helpers.php',
    );

    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'WPMiddleware\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'WPMiddleware\\' => 
        array (
            0 => __DIR__ . '/..' . '/christopherarter/wp-middleware/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita1d8ca5de29142f4efeda1b1eb096391::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita1d8ca5de29142f4efeda1b1eb096391::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
