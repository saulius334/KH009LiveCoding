<?php

declare(strict_types=1);

namespace KH009\Player;

use KH009\Game\GameState;
use KH009\Player\PlayerInterface;

class DrunkPlayer implements PlayerInterface
{
    public function guessLetter(GameState $state): string
    {
        return 'a';
    }
}
