<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9e97533c050df45e1769b90ba9beb25d
{
    public static $classMap = array (
        'App\\controllers\\AboutController' => __DIR__ . '/../..' . '/App/controllers/AboutController.php',
        'App\\controllers\\ArticlesController' => __DIR__ . '/../..' . '/App/controllers/ArticlesController.php',
        'App\\controllers\\ContactController' => __DIR__ . '/../..' . '/App/controllers/ContactController.php',
        'App\\controllers\\HomeController' => __DIR__ . '/../..' . '/App/controllers/HomeController.php',
        'ComposerAutoloaderInit9e97533c050df45e1769b90ba9beb25d' => __DIR__ . '/..' . '/composer/autoload_real.php',
        'Composer\\Autoload\\ClassLoader' => __DIR__ . '/..' . '/composer/ClassLoader.php',
        'Composer\\Autoload\\ComposerStaticInit9e97533c050df45e1769b90ba9beb25d' => __DIR__ . '/..' . '/composer/autoload_static.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'core\\App' => __DIR__ . '/../..' . '/core/App.php',
        'core\\Request' => __DIR__ . '/../..' . '/core/Request.php',
        'core\\Router' => __DIR__ . '/../..' . '/core/Router.php',
        'core\\database\\ConnectionDatabase' => __DIR__ . '/../..' . '/core/database/ConnectionDatabase.php',
        'core\\database\\QueryBuilder' => __DIR__ . '/../..' . '/core/database/QueryBuilder.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit9e97533c050df45e1769b90ba9beb25d::$classMap;

        }, null, ClassLoader::class);
    }
}
