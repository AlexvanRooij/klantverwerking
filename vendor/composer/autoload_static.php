<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite0a7370a8c84e01f76a56d7a4661e52d
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite0a7370a8c84e01f76a56d7a4661e52d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite0a7370a8c84e01f76a56d7a4661e52d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite0a7370a8c84e01f76a56d7a4661e52d::$classMap;

        }, null, ClassLoader::class);
    }
}
