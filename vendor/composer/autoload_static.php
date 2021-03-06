<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit53e6192542dcad9dabc7fba08b688bd7
{
    public static $prefixLengthsPsr4 = array (
        'K' => 
        array (
            'KP\\' => 3,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'KP\\' => 
        array (
            0 => __DIR__ . '/../..' . '/libraries/kpress/src/KP',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit53e6192542dcad9dabc7fba08b688bd7::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit53e6192542dcad9dabc7fba08b688bd7::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
