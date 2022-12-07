<?php

declare(strict_types=1);

namespace Zombaya\PhpstanStubExample;

use Scn\DeeplApiConnector\DeeplClientInterface;

class MyTranslator
{
    public function __construct(private readonly DeeplClientInterface $deeplClient)
    {
    }

    public function translate(string $string): string
    {
        \PHPStan\dumpType($this->deeplClient);
        \PHPStan\dumpType($this->deeplClient->translate($string,'nl'));
        return $this->deeplClient->translate($string,'nl')->getText();
    }
}