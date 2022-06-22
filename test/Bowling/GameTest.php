<?php

namespace Braddle\RefactoringTests\Bowling;

use PHPUnit\Framework\TestCase;

class GameTest extends TestCase
{

    public function testSimpleScoringCasesForFirstBallInFrames()
    {
        $this->assertEquals(45, Game::Score("-- 1- 2- 3- 4- 5- 6- 7- 8- 9-"));
    }

}
