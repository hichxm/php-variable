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
    public function provideMethodGetTypeBooleanReturnCustom();

    /**
     * @return array
     */
    public function provideMethodGetTypeBooleanReturnDefault();

    /**
     * @return array
     */
    public function provideMethodGetTypeDefaultReturnCustom();

    /**
     * @return array
     */
    public function provideMethodGetTypeDouble();

    /**
     * @return array
     */
    public function provideMethodGetTypeExceptionInvalidArgument();

    /**
     * @return array
     */
    public function provideMethodGetTypeExceptionUnexpectedValue();

    /**
     * @return array
     */
    public function provideMethodGetTypeInteger();

    /**
     * @return array
     */
    public function provideMethodGetTypeNull();

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
    public function provideMethodIsEmptyFalse();

    /**
     * @return array
     */
    public function provideMethodIsEmptyTrue();

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
    public function provideMethodIsNullFalse();

    /**
     * @return array
     */
    public function provideMethodIsNullTrue();

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
    public function provideMethodIsScalarFalse();

    /**
     * @return array
     */
    public function provideMethodIsScalarTrue();

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
     * @dataProvider provideMethodGetTypeBooleanReturnCustom
     *
     * @param bool $value
     * @param string $return
     *
     * @return void
     */
    public function testMethodGetTypeBooleanReturnCustom($value, $return);

    /**
     * @dataProvider provideMethodGetTypeBooleanReturnDefault
     *
     * @param bool $value
     *
     * @return void
     */
    public function testMethodGetTypeBooleanReturnDefault($value);

    /**
     * @dataProvider provideMethodGetTypeDefaultReturnCustom
     *
     * @param string $return
     *
     * @return void
     */
    public function testMethodGetTypeDefaultReturnCustom($return);

    /**
     * @return void
     */
    public function testMethodGetTypeDefaultReturnDefault();

    /**
     * @dataProvider provideMethodGetTypeDouble
     *
     * @param float $value
     *
     * @return void
     */
    public function testMethodGetTypeDouble($value);

    /**
     * @dataProvider provideMethodGetTypeExceptionInvalidArgument
     *
     * @return void
     */
    public function testMethodGetTypeExceptionInvalidArgument($return);

    /**
     * @dataProvider provideMethodGetTypeExceptionUnexpectedValue
     *
     * @return void
     */
    public function testMethodGetTypeExceptionUnexpectedValue($return);

    /**
     * @dataProvider provideMethodGetTypeInteger
     *
     * @param int $value
     *
     * @return void
     */
    public function testMethodGetTypeInteger($value);

    /**
     * @param null $value
     *
     * @return void
     */
    public function testMethodGetTypeNull($value);

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
    public function testMethodIsEmptyDefault();

    /**
     * @dataProvider provideMethodIsEmptyFalse
     *
     * @param mixed $value
     *
     * @return void
     */
    public function testMethodIsEmptyFalse($value);

    /**
     * @param mixed $value
     *
     * @return void
     */
    public function testMethodIsEmptyTrue($value);

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
    public function testMethodIsNullDefault();

    /**
     * @dataProvider provideMethodIsNullFalse
     *
     * @param mixed $value
     *
     * @return void
     */
    public function testMethodIsNullFalse($value);

    /**
     * @dataProvider provideMethodIsNullTrue
     *
     * @param null $value
     *
     * @return void
     */
    public function testMethodIsNullTrue($value);

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
     * @return mixed
     */
    public function testMethodIsScalarDefault();

    /**
     * @dataProvider provideMethodIsScalarFalse
     *
     * @param mixed $value
     *
     * @return void
     */
    public function testMethodIsScalarFalse($value);

    /**
     * @dataProvider provideMethodIsScalarTrue
     *
     * @param mixed $value
     *
     * @return void
     */
    public function testMethodIsScalarTrue($value);

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
