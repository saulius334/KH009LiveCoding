<?php

declare(strict_types=1);

namespace KH009\Models;

use KH009\Services\GameState;
use KH009\Interfaces\GameInterface;
use KH009\Interfaces\PlayerInterface;

class Game implements GameInterface
{
    public function __construct(GameState $state)
    {

    }
    public function addPlayer(): PlayerInterface
    {
        
    }
    public function makeTurn(): void
    {
        
    }
    public function isFinished()
    {
        
    }
}