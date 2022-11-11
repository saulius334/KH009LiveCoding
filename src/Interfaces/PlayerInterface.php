<?php

declare(strict_types=1);

namespace KH009\Interfaces;

use KH009\Services\GameState;

interface PlayerInterface
{
    public function guessLetter(GameState $state): string;
}
