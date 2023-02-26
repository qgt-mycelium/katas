<?php

namespace Qgt\Kata\RemoveConsecutiveDuplicateWords\Tests;

use PHPUnit\Framework\TestCase;

require_once dirname(__DIR__) . '/src/RemoveConsecutiveDuplicateWords.php';

final class RemoveConsecutiveDuplicateWordsTest extends TestCase
{
    /**
     * @dataProvider provideExamples
     */
    public function testShouldReturnCorrectAnswer(string $phrase, string $excepted): void
    {
        self::assertSame($excepted, removeConsecutiveDuplicateWords($phrase));
    }

    public function provideExamples(): iterable
    {
        return [
            [
                "alpha beta beta gamma gamma gamma delta alpha beta beta gamma gamma gamma delta",
                "alpha beta gamma delta alpha beta gamma delta"
            ],
            [
                "alpha beta beta gamma gamma zeta gamma gamma delta alpha beta beta gamma gamma gamma delta delta zeta zeta",
                "alpha beta gamma zeta gamma delta alpha beta gamma delta zeta"
            ],
        ];
    }
}