<?php
/*
 * Copyright © 2021 Quorrax, S. L.
 *
 * This file is part of quorrax/variable.
 *
 * quorrax/variable is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * quorrax/variable is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with quorrax/variable. If not, see <https://www.gnu.org/licenses/>.
 */

namespace Quorrax\Classes;

use InvalidArgumentException;
use Quorrax\Interfaces\Variable as VariableInterface;
use UnexpectedValueException;

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
     * @param string $return
     *
     * @return \Quorrax\Classes\Variable
     * @throws \InvalidArgumentException
     * @throws \UnexpectedValueException
     */
    public function getType($return = Variable::class)
    {
        if (is_string($return)) {
            if (is_a($return, VariableInterface::class, true)) {
                return new $return(gettype($this->getValue()));
            } else {
                throw new UnexpectedValueException(); // TODO: Add an exception message.
            }
        } else {
            throw new InvalidArgumentException(); // TODO: Add and exception message.
        }
    }

    /**
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @return \Quorrax\Classes\Variable
     */
    public function isBoolean()
    {
        return new Variable(is_bool($this->value));
    }

    /**
     * @return \Quorrax\Classes\Variable
     */
    public function isEmpty()
    {
        return new Variable(empty($this->value));
    }

    /**
     * @return \Quorrax\Classes\Variable
     */
    public function isFloat()
    {
        return new Variable(is_float($this->value));
    }

    /**
     * @return \Quorrax\Classes\Variable
     */
    public function isInteger()
    {
        return new Variable(is_int($this->value));
    }

    /**
     * @return \Quorrax\Classes\Variable
     */
    public function isNull()
    {
        return new Variable(is_null($this->value));
    }

    /**
     * @return \Quorrax\Classes\Variable
     */
    public function isNumeric()
    {
        return new Variable(is_numeric($this->value));
    }

    /**
     * @return \Quorrax\Classes\Variable
     */
    public function isScalar()
    {
        return new Variable(is_scalar($this->value));
    }

    /**
     * @return \Quorrax\Classes\Variable
     */
    public function isString()
    {
        return new Variable(is_string($this->value));
    }

    /**
     * @param mixed $value
     */
    public function __construct($value = null)
    {
        $this->setValue($value);
    }
}
