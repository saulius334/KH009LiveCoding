<?php

declare(strict_types=1);

namespace Tests;

use KH009\Game\GameState;
use KH009\Player\DrunkPlayer;
use PHPUnit\Framework\TestCase;

class DrunkPlayerTest extends TestCase
{
    public function testDrunkPlayerRetrunsRandomLetter()
    {
        $state = $this->createMock(GameState::class);
        $drunkPlayer = new DrunkPlayer();
        $letter = $drunkPlayer->guessLetter($state);
        $this->assertIsString($letter);
        $this->assertSame(strlen($letter), 1);
        $letter2 = $drunkPlayer->guessLetter($state);
        $this->assertNotEquals($letter, $letter2);
    }
}