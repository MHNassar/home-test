<?php

namespace Semrush\HomeTest\Repository;

use Doctrine\DBAL\Connection;
use Semrush\HomeTest\Service\DBConnection;

class UrlRepository
{
    private ?Connection $connection;

    public function __construct()
    {
        $this->connection = DBConnection::getConnection();
    }

    /**
     * @return \mixed[][]
     * @throws \Doctrine\DBAL\Exception
     */
    public function fetchAll() :array
    {
        $queryBuilder = $this->connection->createQueryBuilder();
        return $queryBuilder
            ->select(['id','url','url_id'])
            ->from('url_id')
            ->executeQuery()->fetchAllAssociative();
    }

    public function fetchOne(int $id): array
    {
        $queryBuilder = $this->connection->createQueryBuilder();
        $result =  $queryBuilder
            ->select(['id','url','url_id'])
            ->from('url_id')
            ->where('id = ?')
            ->setParameter(0,$id)
            ->executeQuery()->fetchAllAssociative();
        if (count($result) > 0) {
            return $result[0];
        }
        return [];
    }

    public function insert(string $url, string $urlId): bool
    {
        $queryBuilder = $this->connection->createQueryBuilder();
        $queryBuilder->insert('url_id') ->values([
            'url' => '?',
            'url_id' => '?',
        ])->setParameter(0,$url)->setParameter(1,$urlId);
        try {
            $queryBuilder->executeQuery();
            return true;
        }catch (\Exception $e){
            return false;
        }
    }


}
