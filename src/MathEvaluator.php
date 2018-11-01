<?php

namespace LangleyFoxall\MathEval;

use MathParser\Interpreting\Evaluator;
use MathParser\StdMathParser;

/**
 * Class MathEvaluator.
 */
class MathEvaluator
{
    /**
     * @var string
     */
    private $expression;
    /**
     * @var array|null
     */
    private $variables;

    /**
     * MathEvaluator constructor.
     *
     * @param $expression
     * @param array|null $variables
     */
    public function __construct($expression, $variables = null)
    {
        $this->expression = $expression;
        $this->variables = $variables;
    }

    /**
     * @return mixed
     */
    public function evaluate()
    {
        $abstractSyntaxTree = $this->parse();

        $evaluator = new Evaluator();

        if ($this->variables && is_array($this->variables)) {
            $evaluator->setVariables($this->variables);
        }

        return $abstractSyntaxTree->accept($evaluator);
    }

    /**
     * @return mixed
     */
    private function parse()
    {
        return (new StdMathParser())->parse($this->expression);
    }
}
