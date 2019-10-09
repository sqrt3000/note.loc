<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitdcd494096f9551b9fd43840b533569dd
{
    public static $prefixLengthsPsr4 = array (
        'r' => 
        array (
            'rrt\\' => 4,
        ),
        'a' => 
        array (
            'app\\' => 4,
        ),
        'V' => 
        array (
            'Valitron\\' => 9,
        ),
        'R' => 
        array (
            'RedBeanPHP\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'rrt\\' => 
        array (
            0 => __DIR__ . '/..' . '/rrt/core',
        ),
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
        'Valitron\\' => 
        array (
            0 => __DIR__ . '/..' . '/vlucas/valitron/src/Valitron',
        ),
        'RedBeanPHP\\' => 
        array (
            0 => __DIR__ . '/..' . '/gabordemooij/redbean/RedBeanPHP',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitdcd494096f9551b9fd43840b533569dd::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitdcd494096f9551b9fd43840b533569dd::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
