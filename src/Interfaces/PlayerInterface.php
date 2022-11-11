<?php

declare(strict_types=1);

namespace KH009\Interfaces;

interface PlayerInterface
{
    public function guessLetter(string $letter): string;
}