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

namespace Quorrax\Interfaces;

/**
 * @package Quorrax\Interfaces
 */
interface Variable
{
    /**
     * @param string $return
     *
     * @return \Quorrax\Interfaces\Variable
     */
    public function getType($return);

    /**
     * @return mixed
     */
    public function getValue();

    /**
     * @return \Quorrax\Interfaces\Variable
     */
    public function isBoolean();

    /**
     * @return \Quorrax\Interfaces\Variable
     */
    public function isEmpty();

    /**
     * @return \Quorrax\Interfaces\Variable
     */
    public function isFloat();

    /**
     * @return \Quorrax\Interfaces\Variable
     */
    public function isInteger();

    /**
     * @return \Quorrax\Interfaces\Variable
     */
    public function isNull();

    /**
     * @return \Quorrax\Interfaces\Variable
     */
    public function isNumeric();

    /**
     * @return \Quorrax\Interfaces\Variable
     */
    public function isScalar();

    /**
     * @return \Quorrax\Interfaces\Variable
     */
    public function isString();

    /**
     * @param mixed $value
     */
    public function __construct($value);
}
