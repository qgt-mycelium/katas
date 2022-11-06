<?php

namespace Qgt\Kata\HalloweenTrickOrTreat\Tests;

use PHPUnit\Framework\TestCase;

require_once dirname(__DIR__) . '/src/TrickOrTreat.php';

final class TrickOrTreatTest extends TestCase
{
    /**
     * @dataProvider provideExamples
     */
    public function testShouldReturnExpectedMessage($children, $candies, $excepted): void
    {
        self::assertSame($excepted, trickOrTreat($children, $candies));
    }

    public function provideExamples(): iterable
    {
        return [
            [
                3, [
                    ["candy", "apple", "candy"],
                    ["candy", "candy"],
                    ["candy", "candy"]
                ], "Thank you, strange uncle!"
            ],
            [
                3, [
                    ["candy", "apple"],
                    ["apple", "candy"],
                    ["candy", "apple"]
                ],
                "Trick or treat!"
            ],
            [
                3, [
                    ["candy", "apple", "candy"],
                    ["candy", "candy"],
                    ["candy", "candy", "candy"]
                ], "Trick or treat!"
            ],
            [
                3, [
                    ["candy", "apple", "candy"],
                    ["candy", "candy"]
                ], "Trick or treat!"
            ],
            [
                3, [
                    ["candy", "apple", "candy"],
                    ["candy", "candy"], 
                    ["candy", "bomb", "candy"]
                ], "Trick or treat!"
            ],
        ];
    }
}
