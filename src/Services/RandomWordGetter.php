<?php

declare(strict_types=1);

namespace KH009\Services;

class RandomWordGetter
{
    private array $words = ['javascript',
                    'php',
                    'ruby',
                    'nextjs',
                    'laravel',
                    'array',
                    'string',
                    'integer',
                    'design',
                    'solid',
                    'react',
                    'drupal',
                    'microservice',
                    'coding'];

    public function getWord(): string
    {
        shuffle($this->words);
        $word = $this->words[0];
        return $word;
    }
}
