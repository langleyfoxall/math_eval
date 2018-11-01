<?php

namespace LangleyFoxall\MathEval\Tests\Unit;

use PHPUnit\Framework\TestCase;

class AutoloadTest extends TestCase
{
    public function testFunctionIsLoaded()
    {
        $this->assertTrue(function_exists('math_eval'), 'math_eval function not autoloaded.');
    }
}
