<?php

declare(strict_types=1);

namespace KH009\Interfaces;

use KH009\Services\GameState;

interface GameInterface
{
    public function __construct(GameState $state);
    public function addPlayer(): PlayerInterface;
    public function makeTurn(): void;
    public function isFinished();
}