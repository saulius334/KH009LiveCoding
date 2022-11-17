<?php

declare(strict_types=1);

namespace KH009\Game;

class GameState
{

    public function __construct(private array $secret, private array $maskedWord)
    {
    }

    public function getMaskedWord()
    {

    }
    private function setMaskedWord()
    {
    }
}
