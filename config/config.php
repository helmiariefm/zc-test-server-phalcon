<?php
    return [
        'database' => [
            'adapter'  => 'Mysql',
            'host'     => 'localhost',
            'username' => 'root',
            'password' => 'mariadb',
            'dbname'   => 'zc-test-server-phalcon',
        ],
        'application' => [
            'controllersDir' => __DIR__ . '/../controllers/',
            'modelsDir'      => __DIR__ . '/../models/',
            'baseUri'        => '/',
        ],
    ];
?>