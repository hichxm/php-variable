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

use Quorrax\Classes\Variables\Boolean;
use Quorrax\Classes\Variables\Character;

/**
 * @package Quorrax\Interfaces
 */
interface Variable
{
    /**
     * @param string $return
     *
     * @return \Quorrax\Interfaces\Variables\Character
     */
    public function getType($return = Character::class);

    /**
     * @return mixed
     */
    public function getValue();

    /**
     * @param string $return
     *
     * @return \Quorrax\Interfaces\Variables\Boolean
     */
    public function isBoolean($return = Boolean::class);

    /**
     * @param string $return
     *
     * @return \Quorrax\Interfaces\Variables\Boolean
     */
    public function isEmpty($return = Boolean::class);

    /**
     * @param string $return
     *
     * @return \Quorrax\Interfaces\Variables\Boolean
     */
    public function isFloat($return = Boolean::class);

    /**
     * @param string $return
     *
     * @return \Quorrax\Interfaces\Variables\Boolean
     */
    public function isInteger($return = Boolean::class);

    /**
     * @param string $return
     *
     * @return \Quorrax\Interfaces\Variables\Boolean
     */
    public function isNull($return = Boolean::class);

    /**
     * @param string $return
     *
     * @return \Quorrax\Interfaces\Variables\Boolean
     */
    public function isNumeric($return = Boolean::class);

    /**
     * @param string $return
     *
     * @return \Quorrax\Interfaces\Variables\Boolean
     */
    public function isScalar($return = Boolean::class);

    /**
     * @param string $return
     *
     * @return \Quorrax\Interfaces\Variables\Boolean
     */
    public function isString($return = Boolean::class);
}
