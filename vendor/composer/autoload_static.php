<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit959e286d40521c2a01b73a21d7ff48ed
{
    public static $prefixLengthsPsr4 = array (
        'K' => 
        array (
            'KPMG\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'KPMG\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit959e286d40521c2a01b73a21d7ff48ed::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit959e286d40521c2a01b73a21d7ff48ed::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
