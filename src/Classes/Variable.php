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

use Quorrax\Interfaces\Variable as VariableInterface;

/**
 * @package Quorrax\Classes
 */
abstract class Variable implements VariableInterface
{
    /**
     * @return mixed
     */
    abstract public function getValue();

    /**
     * @return \Quorrax\Classes\Variable
     */
    public function getType()
    {
        return new Variable(gettype($this->value));
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
}
