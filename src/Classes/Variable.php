<?php

namespace Quorrax\Classes;

use Quorrax\Interfaces\Variable as VariableInterface;

/**
 * @package Quorrax\Classes
 */
class Variable implements VariableInterface
{
    /**
     * @var mixed
     */
    private $value;

    /**
     * @param mixed $value
     *
     * @return void
     */
    private function setValue($value)
    {
        $this->value = $value;
    }

    /**
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param mixed $value
     */
    public function __construct($value = null)
    {
        $this->setValue($value);
    }
}
