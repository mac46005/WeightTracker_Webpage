<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9ebbcf203bfd94503ca87fed1e891bcf
{
    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'WeightTrck_ClassLib\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'WeightTrck_ClassLib\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit9ebbcf203bfd94503ca87fed1e891bcf::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9ebbcf203bfd94503ca87fed1e891bcf::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit9ebbcf203bfd94503ca87fed1e891bcf::$classMap;

        }, null, ClassLoader::class);
    }
}
