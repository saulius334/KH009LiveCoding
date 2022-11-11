<?php

declare(strict_types=1);

namespace KH009\Models;

use KH009\Interfaces\PlayerInterface;
use KH009\Services\GameState;

class Player implements PlayerInterface
{
    public function __construct()
    {
        
    }
    public function guessLetter(GameState $state): string
    {
        return '';
    }
}
