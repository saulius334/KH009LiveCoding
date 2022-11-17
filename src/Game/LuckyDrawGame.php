<?php

declare(strict_types=1);

namespace KH009\Game;

use KH009\Game\GameState;
use KH009\Player\PlayerInterface;

class LuckyDrawGame implements GameInterface
{
    private array $players = [];
    private GameState $state;
    private ?string $winner = null;

    public function __construct(GameState $state = null)
    {
        $words = ['telefon', 'mociute', 'javascript'];
        shuffle($words);
        $secret = $words[0];
        $this->state = $state ?? GameState::fromWord($secret);
    }
    public function addPlayer(PlayerInterface|callable $player, $nickname)
    {
        $this->players[$nickname] = $player;
    }
    public function makeTurn()
    {
        foreach ($this->players as $nickname => $player) {
            $this->state->addLetter($player($this->state));
            if ($this->state->isFinished()) {
                $this->winner = $nickname;
                break;
            }
        }
        return $this->state;
    }
    public function isFinished(): bool
    {
        return $this->state->isFinished();
    }
    public function getWinner()
    {
        return $this->winner;
    }
}