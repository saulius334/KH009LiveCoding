<?php

declare(strict_types=1);

namespace KH009\Services;

class GameState
{
    private array $maskedWord = [];
    public function __construct(private string $secretWord)
    {
        $this->maskedWord = $this->setMaskedWord($secretWord);
    }

    public function getMaskedWord(): array
    {
        return $this->maskedWord;
    }
    private function setMaskedWord(string $word): array
    {
        $letters = str_split($word);
        foreach ($letters as $letter) {
            $maskedWord[] = '_';
        }
        return $maskedWord;
    }
}
