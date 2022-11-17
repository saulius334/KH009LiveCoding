<?php

declare(strict_types=1);

namespace KH009\Player;

use KH009\Game\GameState;
use KH009\Player\PlayerInterface;


class FakePlayer implements PlayerInterface
{
    public function __invoke(GameState $state): string
    {
        return 'x';
    }

}