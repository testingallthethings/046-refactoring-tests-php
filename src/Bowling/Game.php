<?php
namespace Braddle\RefactoringTests\Bowling;

class Game
{

    public static function Score(string $game) : int
    {
        $score = 0;
        $frames = explode(" ", $game);

        foreach ($frames as $frame) {
            if ($frame[0] != "-") {
                $score+= (int) $frame[0];
            }
        }

        return $score;
    }
}