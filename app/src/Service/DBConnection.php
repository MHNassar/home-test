<?php

namespace Semrush\HomeTest\Service;

use Doctrine\DBAL\Connection;
use Doctrine\DBAL\DriverManager;

class DBConnection
{
    private static ?Connection $connection = null;

    private static array $connectionParams = [
        'dbname' => 'UrlTest',
        'user' => 'root',
        'password' => '123',
        'host' => 'db',
        'driver' => 'pdo_mysql',
    ];

    public static function getConnection(){

        if (is_null(self::$connection))
        {
            self::$connection = DriverManager::getConnection(self::$connectionParams);
        }
        return self::$connection;
    }

}
