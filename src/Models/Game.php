<?php

declare(strict_types=1);

namespace KH009\Models;

use KH009\Services\GameState;
use KH009\Interfaces\GameInterface;
use KH009\Interfaces\PlayerInterface;
use KH009\Services\RandomWordGetter;

class Game implements GameInterface
{
    private GameState $gameState;
    public function __construct()
    {
        $randomWordGetter = new RandomWordGetter();
        $this->setSecretWord($randomWordGetter->getWord());
        $gameState = new GameState($this->secretWord);

    }

    public function addPlayer(): PlayerInterface
    {
        return new Player();
    }
    public function makeTurn(): void
    {
    }
    public function isFinished(): void
    {
    }
    private function setSecretWord(string $word): void
    {
        $this->secretWord = $word;
    }
}
