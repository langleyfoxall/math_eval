<?php

namespace LangleyFoxall\MathEval\Tests\Unit;

use PHPUnit\Framework\TestCase;

class EvaluationsTest extends TestCase
{
    public function expressionsDataProvider()
    {
        return [
            ['1 + 1', 2],
            ['7 - 2', 5],
            ['2 * 5', 10],
            ['6 / 2', 3],
            ['5 ^ 2', 25],
        ];
    }

    /**
     * @dataProvider expressionsDataProvider
     */
    public function testEvaluation($expression, $expectedResult)
    {
        $this->assertEquals($expectedResult, math_eval($expression));
    }
}
