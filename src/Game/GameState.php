<?php

declare(strict_types=1);

namespace KH009\Game;

class GameState
{
    private const MASKED_SYMBOL = '_';
    public function __construct(private array $secret, private array $maskedWord = [])
    {
    }
    public static function fromWord(string $word)
    {
        $secret = str_split($word);
        return new self($secret, array_fill(0, count($secret), self::MASKED_SYMBOL));
    }
    public function getMaskedWord(): array
    {
        return $this->maskedWord;
    }
    private function getSecret(): array
    {
        return $this->secret;
    }
    public function isFinished(): bool
    {
        return $this->getMaskedWord() === $this->getSecret();
    }
    public function addLetter(string $letter)
    {
        $i = 0;
        foreach ($this->secret as $secretLetter) {
            if ($secretLetter === $letter) {
                $this->maskedWord[$i] = $letter;
            }
            $i++;
        }
    }
}
