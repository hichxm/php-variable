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

namespace Quorrax\Classes\Variables;

use Exception;
use Quorrax\Classes\Variable;
use Quorrax\Interfaces\Variables\Boolean as BooleanInterface;

/**
 * @package Quorrax\Classes\Variable
 */
class Boolean extends Variable implements BooleanInterface
{
    /**
     * @var bool
     */
    private $value;

    /**
     * @param bool $value
     *
     * @return void
     * @throws \Exception
     */
    private function setValue($value)
    {
        if (is_bool($value)) {
            $this->value = $value;
        } else {
            throw new Exception(); // TODO: Add an exception message.
        }
    }

    /**
     * @return bool
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param bool $value
     *
     * @throws \Exception
     */
    public function __construct($value = false)
    {
        $this->setValue($value);
    }
}