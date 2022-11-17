<?php

declare(strict_types=1);

namespace KH009\Player;

use KH009\Game\GameState;
use KH009\Player\PlayerInterface;

class DrunkPlayer implements PlayerInterface
{
    public function __invoke(GameState $state): string
    {
        static $previousLetter;

        do {
            $az = 'qwertyuiopasdfghjklzxcvbnm';
            $int = random_int(0, strlen($az) - 1);
            $letter = $az[$int];
        } while ($previousLetter === $letter);
        $previousLetter = $letter;
        return $letter;
    }
}
