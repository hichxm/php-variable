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

namespace Quorrax\Tests;

use PHPUnit_Framework_TestCase;
use Quorrax\Classes\Variables\Boolean;
use Quorrax\Classes\Variables\Character;

/**
 * @package Quorrax\Tests\Variables
 */
abstract class VariableTest extends PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider provideMethodGetType
     *
     * @param string $return
     *
     * @return void
     */
    abstract public function testMethodGetType($return);

    /**
     * @return void
     */
    abstract public function testMethodGetTypeDefault();

    /**
     * @dataProvider provideMethodGetTypeException
     *
     * @param string $return
     *
     * @return void
     */
    abstract public function testMethodGetTypeException($return);

    /**
     * @dataProvider provideMethodIsBoolean
     *
     * @param string $return
     *
     * @return void
     */
    abstract public function testMethodIsBoolean($return);

    /**
     * @return void
     */
    abstract public function testMethodIsBooleanDefault();

    /**
     * @dataProvider provideMethodIsBooleanException
     *
     * @param string $return
     *
     * @return void
     */
    abstract public function testMethodIsBooleanException($return);

    /**
     * @return array
     */
    public function provideMethodGetType()
    {
        return [
            [
                Character::class,
            ],
        ];
    }

    /**
     * @return array
     */
    public function provideMethodGetTypeException()
    {
        return [
            [
                Boolean::class,
            ],
        ];
    }

    /**
     * @return array
     */
    public function provideMethodIsBoolean()
    {
        return [
            [
                Boolean::class,
            ],
        ];
    }

    /**
     * @return array
     */
    public function provideMethodIsBooleanException()
    {
        return [
            [
                Character::class,
            ],
        ];
    }
}
