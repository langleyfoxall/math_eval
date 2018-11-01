<?php

namespace LangleyFoxall\MathEval\Tests\Unit;

use PHPUnit\Framework\TestCase;

class EvaluationsWithVariablesTest extends TestCase
{
    public function expressionsDataProvider()
    {
        return [
            ['a + b', ['a' => 2, 'b' => 3], 5],
            ['c - d', ['c' => 9, 'd' => 3], 6],
            ['x * y', ['x' => 3, 'y' => 5], 15],
            ['A / C', ['A' => 4, 'C' => 2], 2],
            ['F ^ b', ['F' => 3, 'b' => 3], 27],
        ];
    }

    /**
     * @dataProvider expressionsDataProvider
     */
    public function testEvaluation($expression, $variables, $expectedResult)
    {
        $this->assertEquals($expectedResult, math_eval($expression, $variables));
    }
}
