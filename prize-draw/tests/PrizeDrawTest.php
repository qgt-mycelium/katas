<?php

namespace Qgt\Kata\PrizeDraw\Tests;

use PHPUnit\Framework\TestCase;
use Qgt\Kata\PrizeDraw\PrizeDraw;

final class PrizeDrawTest extends TestCase
{
    public function setUp(): void 
    {
        $this->prizeDraw = new PrizeDraw();
    }

    public function testShouldReturnCorrectSom(): void
    {
        self::assertSame(54, $this->prizeDraw->som("PauL"));
    }

    public function testShouldReturnWinningNumber(): void
    {
        self::assertSame(108, $this->prizeDraw->winningNumber("PauL", 2));
    }
    
    public function testShouldReturnCorrectParticipant(): void
    {
        self::assertSame(
            "PauL", 
            $this->prizeDraw->searchWithRank("COLIN,AMANDBA,AMANDAB,CAROL,PauL,JOSEPH", [1, 4, 4, 5, 2, 1], 4)
        );
        self::assertSame(
            "No participants", 
            $this->prizeDraw->searchWithRank("", [], 1)
        );
        self::assertSame(
            "Not enough participants", 
            $this->prizeDraw->searchWithRank("COLIN", [], 4)
        );
    }
}