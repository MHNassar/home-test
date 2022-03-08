<?php

namespace Semrush\HomeTest\Network;

final class CustomUrlIdGenerator extends AbstractUrlIdGenerator
{
    protected function generateId(string $url): string
    {
        return gmp_strval(gmp_init(substr(sha1($url), 0, 16), 16));
    }
}
