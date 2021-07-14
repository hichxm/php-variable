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
use Quorrax\Interfaces\Variables\Character as CharacterInterface;

/**
 * @package Quorrax\Classes\Variables
 */
class Character extends Variable implements CharacterInterface
{
    /**
     * @var string
     */
    private $value;

    /**
     * @param string $value
     *
     * @return void
     * @throws \Exception
     */
    private function setValue($value)
    {
        if (is_string($value)) {
            $this->value = $value;
        } else {
            throw new Exception(); // TODO: Add an exception message.
        }
    }

    /**
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param string $value
     *
     * @throws \Exception
     */
    public function __construct($value = "")
    {
        $this->setValue($value);
    }
}
