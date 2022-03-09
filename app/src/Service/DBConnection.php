<?php

namespace Semrush\HomeTest\Service;

use Doctrine\DBAL\Connection;
use Doctrine\DBAL\DriverManager;
use \Doctrine\DBAL\Schema\Schema;

class DBConnection
{
    private static ?Connection $connection = null;

    private static array $connectionParams = [
        'dbname' => 'urldb',
        'user' => 'root',
        'password' => 'root',
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
