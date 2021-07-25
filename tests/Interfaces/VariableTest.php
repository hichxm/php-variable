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

namespace Quorrax\Tests\Interfaces;

/**
 * @package Quorrax\Tests\Interfaces
 */
interface VariableTest
{
    /**
     * @return array
     */
    public function provideMethodConstruct();

    /**
     * @return array
     */
    public function provideMethodGetValue();

    /**
     * @return void
     */
    public function testImplementationVariable();

    /**
     * @dataProvider provideMethodConstruct
     *
     * @param mixed $value
     *
     * @return void
     */
    public function testMethodConstruct($value);

    /**
     * @return void
     */
    public function testMethodConstructDefault();

    /**
     * @dataProvider provideMethodGetValue
     *
     * @param mixed $value
     *
     * @return void
     */
    public function testMethodGetValue($value);

    /**
     * @return void
     */
    public function testMethodGetValueDefault();
}
