<?php

use LangleyFoxall\MathEval\MathEvaluator;

if (!function_exists('math_eval')) {
    function math_eval($expression, $variables = null)
    {
        $evaluator = new MathEvaluator($expression, $variables);

        return $evaluator->evaluate();
    }
}
