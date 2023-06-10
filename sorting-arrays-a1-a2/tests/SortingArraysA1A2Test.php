<?php

namespace Qgt\Kata\SortingArraysA1A2\Tests;

use PHPUnit\Framework\TestCase;

require_once dirname(__DIR__) . '/src/SortingArraysA1A2.php';

final class SortingArraysA1A2Test extends TestCase
{
    /**
     * @dataProvider provideExamples
     */
    public function testShouldReturnCorrectAnswer(array $arrays, array $excepted): void
    {
        self::assertSame($excepted, sortElementsOfA2BasedIndexOfA1($arrays['a1'], $arrays['a2']));
    }

    public function provideExamples(): iterable
    {
        return [
            [
                [
                    'a1' => ['giraffe', 'orangutan', 'impala', 'elephant', 'rhino'],
                    'a2' => ['rattlesnake', 'eagle', 'geko', 'iguana', 'octopus'],
                ],
                ['geko', 'octopus', 'iguana', 'eagle', 'rattlesnake']
            ],
            [
                [
                    'a1' => ['jellyfish', 'koi', 'caribou', 'owl', 'dolphin'],
                    'a2' => ['ostrich', 'jaguar', 'deer', 'camel', 'kangaroo']
                ],
                ['jaguar', 'kangaroo', 'camel', 'ostrich', 'deer']
            ],
        ];
    }
}