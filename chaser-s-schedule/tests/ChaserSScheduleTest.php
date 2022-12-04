<?php

namespace Qgt\Kata\ChaserSSchedule\Tests;

use PHPUnit\Framework\TestCase;
use Qgt\Kata\ChaserSSchedule\ChaserSSchedule;

final class ChaserSSchedulTest extends TestCase
{
    public function setUp(): void 
    {
        $this->chaserSSchedule = new ChaserSSchedule();
    }

    public function testSpeedInputBetween1To1000(): void
    {
        $expected = "Speed must be between 1 and 1000 (1 <= s < 1000)";
        self::assertSame($expected, $this->chaserSSchedule->sequence(s: 0, t: 4));
        self::assertSame($expected, $this->chaserSSchedule->sequence(s: 1000, t: 4));
    }

    public function testTimeInputBetween1To1000(): void
    {
        $expected = "Time must be between 1 and 1000 (1 <= t < 1000)";
        self::assertSame($expected, $this->chaserSSchedule->sequence(s: 2, t: 0));
        self::assertSame($expected, $this->chaserSSchedule->sequence(s: 2, t: 1000));
    }

    public function testSchedule(): void
    {
        self::assertSame(10, $this->chaserSSchedule->sequence(s: 2, t: 4));
        self::assertSame(17, $this->chaserSSchedule->sequence(s: 4, t: 3));
        self::assertSame(575, $this->chaserSSchedule->sequence(s: 73, t: 5));
        self::assertSame(497, $this->chaserSSchedule->sequence(s: 28, t: 13));
    }
}