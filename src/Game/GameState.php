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
    public function getMaskedWord()
    {
        return $this->maskedWord;
    }
    public function getSecret()
    {
        return $this->secret;
    }
}
