<?php

declare(strict_types=1);

namespace KH009\Game;

use KH009\Game\GameState;
use KH009\Player\PlayerInterface;

class LuckyDrawGame
{
    private array $players = [];
    private ?GameState $state = null;

    public function __construct(GameState $state = null)
    {
        $words = ['telefon', 'mociute', 'javascript'];
        shuffle($words);
        $secret = $words[0];
        $this->state = $state ?? GameState::fromWord($secret);
    }
    public function addPlayer(PlayerInterface $player)
    {
        $this->players[] = $player;
    }
    public function makeTurn()
    {
        foreach ($this->players as $player) {
            
        }
    }
    public function isFinished(): bool
    {
        return $this->state->getMaskedWord() === $this->state->getSecret();
    }
}