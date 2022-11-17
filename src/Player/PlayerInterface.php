<?php

declare(strict_types=1);

namespace KH009\Player;

use KH009\Game\GameState;

interface PlayerInterface
{
    public function guessLetter(GameState $state): string;
}
