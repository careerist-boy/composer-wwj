<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitdabd6a2a9ecc36660836077c6e299b37
{
    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'Wwj\\Test\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Wwj\\Test\\' => 
        array (
            0 => 'D:\\/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitdabd6a2a9ecc36660836077c6e299b37::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitdabd6a2a9ecc36660836077c6e299b37::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitdabd6a2a9ecc36660836077c6e299b37::$classMap;

        }, null, ClassLoader::class);
    }
}
