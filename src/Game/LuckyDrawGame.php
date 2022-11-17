<?php

declare(strict_types=1);

namespace KH009\Game;

use KH009\Player\PlayerInterface;

class LuckyDrawGame
{
    private array $players;
    private ?GameState $state = null;
    public function __construct(GameState $state = null)
    {
        $this->state ?? new GameState();
    }
    public function addPlayer(PlayerInterface $player)
    {
        $this->players[] = $player;
    }
    public function makeTurn()
    {

    }
    public function isFinished()
    {

    }
}