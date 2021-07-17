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

use Exception;
use Quorrax\Classes\Variables\Boolean;
use Quorrax\Classes\Variables\Character;
use Quorrax\Interfaces\Variable as VariableInterface;
use Quorrax\Interfaces\Variables\Boolean as BooleanInterface;
use Quorrax\Interfaces\Variables\Character as CharacterInterface;

/**
 * @package Quorrax\Classes
 */
abstract class Variable implements VariableInterface
{
    /**
     * @param string $function
     * @param string $return
     *
     * @return \Quorrax\Interfaces\Variables\Boolean
     * @throws \Exception
     */
    private function is($function, $return)
    {
        if (is_a($return, BooleanInterface::class, true)) {
            return new $return(call_user_func($function, $this->getValue()));
        } else {
            throw new Exception(); // TODO: Define an exception message.
        }
    }

    /**
     * @return mixed
     */
    abstract public function getValue();

    /**
     * @param string $return
     *
     * @return \Quorrax\Interfaces\Variables\Character
     * @throws \Exception
     */
    public function getType($return = Character::class)
    {
        if ($return instanceof CharacterInterface) {
            return new $return(gettype($this->getValue()));
        } else {
            throw new Exception(); // TODO: Define an exception message.
        }
    }

    /**
     * @param string $return
     *
     * @return \Quorrax\Interfaces\Variables\Boolean
     * @throws \Exception
     */
    public function isBoolean($return = Boolean::class)
    {
        return $this->is("is_bool", $return);
    }

    /**
     * @param string $return
     *
     * @return \Quorrax\Interfaces\Variables\Boolean
     * @throws \Exception
     */
    public function isEmpty($return = Boolean::class)
    {
        return $this->is("empty", $return);
    }

    /**
     * @param string $return
     *
     * @return \Quorrax\Interfaces\Variables\Boolean
     * @throws \Exception
     */
    public function isFloat($return = Boolean::class)
    {
        return $this->is("is_float", $return);
    }

    /**
     * @param string $return
     *
     * @return \Quorrax\Interfaces\Variables\Boolean
     * @throws \Exception
     */
    public function isInteger($return = Boolean::class)
    {
        return $this->is("is_int", $return);
    }

    /**
     * @param string $return
     *
     * @return \Quorrax\Interfaces\Variables\Boolean
     * @throws \Exception
     */
    public function isNull($return = Boolean::class)
    {
        return $this->is("is_null", $return);
    }

    /**
     * @param string $return
     *
     * @return \Quorrax\Interfaces\Variables\Boolean
     * @throws \Exception
     */
    public function isNumeric($return = Boolean::class)
    {
        return $this->is("is_numeric", $return);
    }

    /**
     * @param string $return
     *
     * @return \Quorrax\Interfaces\Variables\Boolean
     * @throws \Exception
     */
    public function isScalar($return = Boolean::class)
    {
        return $this->is("is_scalar", $return);
    }

    /**
     * @param string $return
     *
     * @return \Quorrax\Interfaces\Variables\Boolean
     * @throws \Exception
     */
    public function isString($return = Boolean::class)
    {
        return $this->is("is_string", $return);
    }
}
