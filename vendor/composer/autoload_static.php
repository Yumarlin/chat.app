<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit39578f83dff0f62222fb045629042645
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Medoo\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Medoo\\' => 
        array (
            0 => __DIR__ . '/..' . '/catfan/medoo/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit39578f83dff0f62222fb045629042645::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit39578f83dff0f62222fb045629042645::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
