<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3e988e10bdbbbfbb3a48e874bdc43553
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'MF\\' => 3,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'MF\\' => 
        array (
            0 => __DIR__ . '/..' . '/MF',
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit3e988e10bdbbbfbb3a48e874bdc43553::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3e988e10bdbbbfbb3a48e874bdc43553::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit3e988e10bdbbbfbb3a48e874bdc43553::$classMap;

        }, null, ClassLoader::class);
    }
}
