<?php declare(strict_types = 1);

namespace Semrush\HomeTest\Network;

use Semrush\HomeTest\Service\DBConnection;

final class PhpUrlIdGenerator extends AbstractUrlIdGenerator
{

    /**
     * @throws \Doctrine\DBAL\Exception
     */
    protected function generateId(string $url) : string
    {
        $url = sha1($url);
        $query = "SELECT CAST(CONV(SUBSTRING('$url', 1, 16), 16, 10) AS UNSIGNED)";
        $conn = DBConnection::getConnection();
        $stmt = $conn->prepare($query);
        $resultSet = $stmt->executeQuery();
        $data = $resultSet->fetchAssociative();
        return array_values($data)[0];
    }
}
