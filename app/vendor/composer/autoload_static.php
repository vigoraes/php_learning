<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8c33706db6aff769a081e3c620b7e270
{
    public static $classMap = array (
        'App' => __DIR__ . '/../..' . '/core/app.php',
        'ComposerAutoloaderInit8c33706db6aff769a081e3c620b7e270' => __DIR__ . '/..' . '/composer/autoload_real.php',
        'Composer\\Autoload\\ClassLoader' => __DIR__ . '/..' . '/composer/ClassLoader.php',
        'Composer\\Autoload\\ComposerStaticInit8c33706db6aff769a081e3c620b7e270' => __DIR__ . '/..' . '/composer/autoload_static.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Connection' => __DIR__ . '/../..' . '/core/database/connection.php',
        'QueryBuilder' => __DIR__ . '/../..' . '/core/database/querybuilder.php',
        'Request' => __DIR__ . '/../..' . '/core/request.php',
        'Router' => __DIR__ . '/../..' . '/core/router.php',
        'pageController' => __DIR__ . '/../..' . '/controllers/pageController.php',
        'usersController' => __DIR__ . '/../..' . '/controllers/usersController.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit8c33706db6aff769a081e3c620b7e270::$classMap;

        }, null, ClassLoader::class);
    }
}
