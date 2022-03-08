<?php

namespace Semrush\HomeTest\Tests\Network;

use Semrush\HomeTest\Network\CustomUrlIdGenerator;
use PHPUnit\Framework\TestCase;
use Semrush\HomeTest\Network\UrlIdGenerator;

final class CustomUrlIdGeneratorTest extends TestCase
{
    private CustomUrlIdGenerator $customUrlIdGenerator;

    protected function setUp(): void
    {
        $this->customUrlIdGenerator = new CustomUrlIdGenerator();
    }

    public function testInstantiationWorks() : void
    {
        self::assertInstanceOf(CustomUrlIdGenerator::class, $this->customUrlIdGenerator);
        self::assertInstanceOf(UrlIdGenerator::class, $this->customUrlIdGenerator);
    }

    /**
     * @return array []
     * @dataProvider
     */
    public function provideGeneratorExpectations() : array
    {
        $providers = [];

        $file = \fopen(__DIR__ . '/../Resources/url_ids.txt', 'r');

        if (false !== $file) {
            while (($line = \fgets($file)) !== false) {
                $providers[] = \explode("\t|\t", \trim($line));
            }

            \fclose($file);
        }

        return $providers;
    }

    /**
     * @dataProvider provideGeneratorExpectations
     */
    public function testGenerateUrl(string $url, string $expectedId) : void
    {
        $generatedId = $this->customUrlIdGenerator->generate($url);

        self::assertSame(
            $expectedId,
            $generatedId,
            \sprintf('Expected URL ID generator to return ID [%s], got [%s] instead.', $expectedId, $generatedId)
        );
    }
}
