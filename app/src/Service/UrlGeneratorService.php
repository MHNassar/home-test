<?php

namespace Semrush\HomeTest\Service;

use Semrush\HomeTest\Network\PhpUrlIdGenerator;
use Semrush\HomeTest\Network\UrlIdGenerator;
use Semrush\HomeTest\Repository\UrlRepository;

class UrlGeneratorService
{

    private UrlIdGenerator $urlIdGenerator;
    private UrlRepository $urlRepository;
    public function __construct()
    {
        $this->urlIdGenerator = new PhpUrlIdGenerator();
        $this->urlRepository = new UrlRepository();
    }

    /**
     * @param string $url
     * @return bool
     */
    public function saveUrl(string $url): bool
    {
        $urlId = $this->urlIdGenerator->generate($url);
        return $this->urlRepository->insert($url, $urlId);

    }

    /**
     * @return array
     * @throws \Doctrine\DBAL\Exception
     */
    public function getAll(): array
    {
        return $this->urlRepository->fetchAll();
    }

    public function getOne(int $id):array
    {
        return $this->urlRepository->fetchOne($id);
    }
}
