<?php

declare(strict_types=1);

namespace KH009\Services;

class RandomWordGetter
{
    private $words = ['fish', 'door', 'car', 'floor', 'china', 'spark', 'dark', 'tube', 'boy', 'girl', 'nose', 'bar', 'fool', 'house'];

    public function getWord()
    {
        shuffle($this->words);
        $word = $this->words[0];
        return $word;
    }
}