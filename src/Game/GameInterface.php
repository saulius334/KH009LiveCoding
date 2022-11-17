<?php

declare(strict_types=1);

namespace KH009\Game;

use KH009\Player\PlayerInterface;

interface GameInterface
{
    public function __construct();
    public function addPlayer(PlayerInterface|callable $player, $nickname);
    public function makeTurn();
    public function isFinished(): bool;
}
