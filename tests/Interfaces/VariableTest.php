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
    public function provideMethodGetTypeBoolean();

    /**
     * @return array
     */
    public function provideMethodGetTypeDouble();

    /**
     * @return array
     */
    public function provideMethodGetTypeInteger();

    /**
     * @return array
     */
    public function provideMethodGetTypeString();

    /**
     * @return array
     */
    public function provideMethodGetValue();

    /**
     * @return array
     */
    public function provideMethodIsBooleanFalse();

    /**
     * @return array
     */
    public function provideMethodIsBooleanTrue();

    /**
     * @return array
     */
    public function provideMethodIsFloatFalse();

    /**
     * @return array
     */
    public function provideMethodIsFloatTrue();

    /**
     * @return array
     */
    public function provideMethodIsIntegerFalse();

    /**
     * @return array
     */
    public function provideMethodIsIntegerTrue();

    /**
     * @return array
     */
    public function provideMethodIsNumericFalse();

    /**
     * @return array
     */
    public function provideMethodIsNumericTrue();

    /**
     * @return array
     */
    public function provideMethodIsStringFalse();

    /**
     * @return array
     */
    public function provideMethodIsStringTrue();

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
     * @dataProvider provideMethodGetTypeBoolean
     *
     * @param bool $value
     *
     * @return void
     */
    public function testMethodGetTypeBoolean($value);

    /**
     * @return void
     */
    public function testMethodGetTypeDefault();

    /**
     * @dataProvider provideMethodGetTypeDouble
     *
     * @param float $value
     *
     * @return void
     */
    public function testMethodGetTypeDouble($value);

    /**
     * @dataProvider provideMethodGetTypeInteger
     *
     * @param int $value
     *
     * @return void
     */
    public function testMethodGetTypeInteger($value);

    /**
     * @dataProvider provideMethodGetTypeString
     *
     * @param string $value
     *
     * @return void
     */
    public function testMethodGetTypeString($value);

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

    /**
     * @return void
     */
    public function testMethodIsBooleanDefault();

    /**
     * @dataProvider provideMethodIsBooleanFalse
     *
     * @param mixed $value
     *
     * @return void
     */
    public function testMethodIsBooleanFalse($value);

    /**
     * @dataProvider provideMethodIsBooleanTrue
     *
     * @param bool $value
     *
     * @return void
     */
    public function testMethodIsBooleanTrue($value);

    /**
     * @return void
     */
    public function testMethodIsFloatDefault();

    /**
     * @dataProvider provideMethodIsFloatFalse
     *
     * @param mixed $value
     *
     * @return void
     */
    public function testMethodIsFloatFalse($value);

    /**
     * @dataProvider provideMethodIsFloatTrue
     *
     * @param float $value
     *
     * @return void
     */
    public function testMethodIsFloatTrue($value);

    /**
     * @return void
     */
    public function testMethodIsIntegerDefault();

    /**
     * @dataProvider provideMethodIsIntegerFalse
     *
     * @param mixed $value
     *
     * @return void
     */
    public function testMethodIsIntegerFalse($value);

    /**
     * @dataProvider provideMethodIsIntegerTrue
     *
     * @param int $value
     *
     * @return void
     */
    public function testMethodIsIntegerTrue($value);

    /**
     * @return void
     */
    public function testMethodIsNumericDefault();

    /**
     * @dataProvider provideMethodIsNumericFalse
     *
     * @param mixed $value
     *
     * @return void
     */
    public function testMethodIsNumericFalse($value);

    /**
     * @dataProvider provideMethodIsNumericTrue
     *
     * @param mixed $value
     *
     * @return void
     */
    public function testMethodIsNumericTrue($value);

    /**
     * @return void
     */
    public function testMethodIsStringDefault();

    /**
     * @dataProvider provideMethodIsStringFalse
     *
     * @param mixed $value
     *
     * @return void
     */
    public function testMethodIsStringFalse($value);

    /**
     * @dataProvider provideMethodIsStringTrue
     *
     * @param string $value
     *
     * @return void
     */
    public function testMethodIsStringTrue($value);
}
