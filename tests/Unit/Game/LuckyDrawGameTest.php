<?php

declare(strict_types=1);

namespace Tests;

use KH009\Game\LuckyDrawGame;
use PHPUnit\Framework\TestCase;

class LuckyDrawGameTest extends TestCase
{
    public function testEmptyRound()
    {
        $game = new LuckyDrawGame();
        $game->makeTurn();
        $this->assertFalse($game->isFinished());
    }

}