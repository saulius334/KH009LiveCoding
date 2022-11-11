<?php

declare(strict_types=1);

namespace KH009\Interfaces;

interface GameInterface
{
    public function __construct();
    public function addPlayer(): PlayerInterface;
    public function makeTurn(): void;
    public function isFinished(): void;
}
