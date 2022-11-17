<?php

declare(strict_types=1);

namespace Tests;

use KH009\Game\GameState;
use KH009\Game\LuckyDrawGame;
use PHPUnit\Framework\TestCase;

class LuckyDrawGameTest extends TestCase
{
    public function testEmptyRound(): void
    {
        $game = new LuckyDrawGame();
        $game->makeTurn();
        $this->assertFalse($game->isFinished());
    }
    public function testPlayerGuessedLetterSuccessfully(): void
    {
        $game = new LuckyDrawGame(GameState::fromWord('xD'));
        $game->addPlayer(function() {
            return 'x';
        }, 'Saulius');
        $state = $game->makeTurn();
        $this->assertSame(['x','_'],$state->getMaskedWord());
    }
    public function testGameIsFinished(): void
    {
        $game = new LuckyDrawGame(GameState::fromWord('x'));
        $game->addPlayer(function() {
            return 'x';
        }, 'Saulius');
        $state = $game->makeTurn();
        $this->assertTrue($state->isFinished());
    }
    public function testTwoPlayerGame(): void
    {
        $game = new LuckyDrawGame(GameState::fromWord('xD'));
        $game->addPlayer(function() {
            return 'x';
        }, 'Saulius');
        $game->addPlayer(function() {
            return 'D';
        }, 'Paulius');
        $state = $game->makeTurn();
        $this->assertTrue($state->isFinished());
    }
    public function testGameEndsAfter2ndGuess(): void
    {
        $game = new LuckyDrawGame(GameState::fromWord('xD'));
        $game->addPlayer(function() {
            return 'x';
        }, 'Saulius');
        $game->addPlayer(function() {
            return 'D';
        }, 'Paulius');
        $game->addPlayer(function() {
            return 'D';
        }, 'Xaulius');
        $game->makeTurn();
        $this->assertSame('Paulius',$game->getWinner());
    }
}