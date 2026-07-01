<?php

namespace LangleyFoxall\MathEval\Tests\Unit;

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

class EvaluationsTest extends TestCase
{
    public static function expressionsDataProvider()
    {
        return [
            ['1 + 1', 2],
            ['7 - 2', 5],
            ['2 * 5', 10],
            ['6 / 2', 3],
            ['5 ^ 2', 25],
        ];
    }

    #[DataProvider('expressionsDataProvider')]
    public function testEvaluation($expression, $expectedResult)
    {
        $this->assertEquals($expectedResult, math_eval($expression));
    }
}
