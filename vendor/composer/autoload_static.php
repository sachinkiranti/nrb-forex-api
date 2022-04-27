<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3b06b67cf5c0b4afa2421438956735ad
{
    public static $files = array (
        '32e61c7c655952a6e4811f66231a61b7' => __DIR__ . '/../..' . '/src/helpers.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'SachinKiranti\\NrbForexApi\\' => 26,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'SachinKiranti\\NrbForexApi\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit3b06b67cf5c0b4afa2421438956735ad::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3b06b67cf5c0b4afa2421438956735ad::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit3b06b67cf5c0b4afa2421438956735ad::$classMap;

        }, null, ClassLoader::class);
    }
}
