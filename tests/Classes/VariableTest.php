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

namespace Quorrax\Tests\Classes;

use PHPUnit\Framework\TestCase;
use Quorrax\Classes\Variable;
use Quorrax\Interfaces\Variable as VariableInterface;
use Quorrax\Tests\Classes\Concerns\ProviderTrait;
use Quorrax\Tests\Interfaces\VariableTest as VariableTestInterface;

/**
 * @package Quorrax\Tests\Classes
 */
class VariableTest extends TestCase implements VariableTestInterface
{

    use ProviderTrait;

    /**
     * @return void
     */
    public function testImplementationVariable()
    {
        $this->assertInstanceOf(VariableInterface::class, new Variable());
    }

    /**
     * @dataProvider provideMethodConstruct
     *
     * @param mixed $value
     *
     * @return void
     */
    public function testMethodConstruct($value)
    {
        $this->assertInstanceOf(Variable::class, new Variable($value));
    }

    /**
     * @return void
     */
    public function testMethodConstructDefault()
    {
        $this->assertInstanceOf(Variable::class, new Variable());
    }

    /**
     * @dataProvider provideMethodGetTypeBoolean
     *
     * @param bool $value
     *
     * @return void
     */
    public function testMethodGetTypeBoolean($value)
    {
        $variable = new Variable($value);
        $type = $variable->getType();
        $this->assertInstanceOf(VariableInterface::class, $type);
        $this->assertInstanceOf(Variable::class, $type);
        $this->assertSame("boolean", $type->getValue());
    }

    /**
     * @return void
     */
    public function testMethodGetTypeDefault()
    {
        $variable = new Variable();
        $type = $variable->getType();
        $this->assertInstanceOf(VariableInterface::class, $type);
        $this->assertInstanceOf(Variable::class, $type);
        $this->assertSame("NULL", $type->getValue());
    }

    /**
     * @dataProvider provideMethodGetTypeDouble
     *
     * @param float $value
     *
     * @return void
     */
    public function testMethodGetTypeDouble($value)
    {
        $variable = new Variable($value);
        $type = $variable->getType();
        $this->assertInstanceOf(VariableInterface::class, $type);
        $this->assertInstanceOf(Variable::class, $type);
        $this->assertSame("double", $type->getValue());
    }

    /**
     * @dataProvider provideMethodGetTypeInteger
     *
     * @param int $value
     *
     * @return void
     */
    public function testMethodGetTypeInteger($value)
    {
        $variable = new Variable($value);
        $type = $variable->getType();
        $this->assertInstanceOf(VariableInterface::class, $type);
        $this->assertInstanceOf(Variable::class, $type);
        $this->assertSame("integer", $type->getValue());
    }

    /**
     * @dataProvider provideMethodGetTypeNull
     *
     * @param null $value
     *
     * @return void
     */
    public function testMethodGetTypeNull($value)
    {
        $variable = new Variable($value);
        $type = $variable->getType();
        $this->assertInstanceOf(VariableInterface::class, $type);
        $this->assertInstanceOf(Variable::class, $type);
        $this->assertSame("NULL", $type->getValue());
    }

    /**
     * @dataProvider provideMethodGetTypeString
     *
     * @param string $value
     *
     * @return void
     */
    public function testMethodGetTypeString($value)
    {
        $variable = new Variable($value);
        $type = $variable->getType();
        $this->assertInstanceOf(VariableInterface::class, $type);
        $this->assertInstanceOf(Variable::class, $type);
        $this->assertSame("string", $type->getValue());
    }

    /**
     * @dataProvider provideMethodGetValue
     *
     * @param mixed $value
     *
     * @return void
     */
    public function testMethodGetValue($value)
    {
        $variable = new Variable($value);
        $this->assertSame($value, $variable->getValue());
    }

    /**
     * @return void
     */
    public function testMethodGetValueDefault()
    {
        $variable = new Variable();
        $this->assertSame(null, $variable->getValue());
    }

    /**
     * @return void
     */
    public function testMethodIsBooleanDefault()
    {
        $variable = new Variable();
        $isBoolean = $variable->isBoolean();
        $this->assertInstanceOf(VariableInterface::class, $isBoolean);
        $this->assertInstanceOf(Variable::class, $isBoolean);
        $this->assertSame(false, $isBoolean->getValue());
    }

    /**
     * @dataProvider provideMethodIsBooleanFalse
     *
     * @param mixed $value
     *
     * @return void
     */
    public function testMethodIsBooleanFalse($value)
    {
        $variable = new Variable($value);
        $isBoolean = $variable->isBoolean();
        $this->assertInstanceOf(VariableInterface::class, $isBoolean);
        $this->assertInstanceOf(Variable::class, $isBoolean);
        $this->assertSame(false, $isBoolean->getValue());
    }

    /**
     * @dataProvider provideMethodIsBooleanTrue
     *
     * @param bool $value
     *
     * @return void
     */
    public function testMethodIsBooleanTrue($value)
    {
        $variable = new Variable($value);
        $isBoolean = $variable->isBoolean();
        $this->assertInstanceOf(VariableInterface::class, $isBoolean);
        $this->assertInstanceOf(Variable::class, $isBoolean);
        $this->assertSame(true, $isBoolean->getValue());
    }

    /**
     * @return void
     */
    public function testMethodIsEmptyDefault()
    {
        $variable = new Variable();
        $isEmpty = $variable->isEmpty();
        $this->assertInstanceOf(VariableInterface::class, $isEmpty);
        $this->assertInstanceOf(Variable::class, $isEmpty);
        $this->assertSame(true, $isEmpty->getValue());
    }

    /**
     * @dataProvider provideMethodIsEmptyFalse
     *
     * @param mixed $value
     *
     * @return void
     */
    public function testMethodIsEmptyFalse($value)
    {
        $variable = new Variable($value);
        $isEmpty = $variable->isEmpty();
        $this->assertInstanceOf(VariableInterface::class, $isEmpty);
        $this->assertInstanceOf(Variable::class, $isEmpty);
        $this->assertSame(false, $isEmpty->getValue());
    }

    /**
     * @dataProvider provideMethodIsEmptyTrue
     *
     * @param mixed $value
     *
     * @return void
     */
    public function testMethodIsEmptyTrue($value)
    {
        $variable = new Variable($value);
        $isEmpty = $variable->isEmpty();
        $this->assertInstanceOf(VariableInterface::class, $isEmpty);
        $this->assertInstanceOf(Variable::class, $isEmpty);
        $this->assertSame(true, $isEmpty->getValue());
    }

    /**
     * @return void
     */
    public function testMethodIsFloatDefault()
    {
        $variable = new Variable();
        $isFloat = $variable->isFloat();
        $this->assertInstanceOf(VariableInterface::class, $isFloat);
        $this->assertInstanceOf(Variable::class, $isFloat);
        $this->assertSame(false, $isFloat->getValue());
    }

    /**
     * @dataProvider provideMethodIsFloatFalse
     *
     * @param mixed $value
     *
     * @return void
     */
    public function testMethodIsFloatFalse($value)
    {
        $variable = new Variable($value);
        $isFloat = $variable->isFloat();
        $this->assertInstanceOf(VariableInterface::class, $isFloat);
        $this->assertInstanceOf(Variable::class, $isFloat);
        $this->assertSame(false, $isFloat->getValue());
    }

    /**
     * @dataProvider provideMethodIsFloatTrue
     *
     * @param float $value
     *
     * @return void
     */
    public function testMethodIsFloatTrue($value)
    {
        $variable = new Variable($value);
        $isFloat = $variable->isFloat();
        $this->assertInstanceOf(VariableInterface::class, $isFloat);
        $this->assertInstanceOf(Variable::class, $isFloat);
        $this->assertSame(true, $isFloat->getValue());
    }

    /**
     * @return void
     */
    public function testMethodIsIntegerDefault()
    {
        $variable = new Variable();
        $isInteger = $variable->isInteger();
        $this->assertInstanceOf(VariableInterface::class, $isInteger);
        $this->assertInstanceOf(Variable::class, $isInteger);
        $this->assertSame(false, $isInteger->getValue());
    }

    /**
     * @dataProvider provideMethodIsIntegerFalse
     *
     * @param mixed $value
     *
     * @return void
     */
    public function testMethodIsIntegerFalse($value)
    {
        $variable = new Variable($value);
        $isInteger = $variable->isInteger();
        $this->assertInstanceOf(VariableInterface::class, $isInteger);
        $this->assertInstanceOf(Variable::class, $isInteger);
        $this->assertSame(false, $isInteger->getValue());
    }

    /**
     * @dataProvider provideMethodIsIntegerTrue
     *
     * @param int $value
     *
     * @return void
     */
    public function testMethodIsIntegerTrue($value)
    {
        $variable = new Variable($value);
        $isInteger = $variable->isInteger();
        $this->assertInstanceOf(VariableInterface::class, $isInteger);
        $this->assertInstanceOf(Variable::class, $isInteger);
        $this->assertSame(true, $isInteger->getValue());
    }

    /**
     * @return void
     */
    public function testMethodIsNullDefault()
    {
        $variable = new Variable();
        $isNull = $variable->isNull();
        $this->assertInstanceOf(VariableInterface::class, $isNull);
        $this->assertInstanceOf(Variable::class, $isNull);
        $this->assertSame(true, $isNull->getValue());
    }

    /**
     * @dataProvider provideMethodIsNullFalse
     *
     * @param mixed $value
     *
     * @return void
     */
    public function testMethodIsNullFalse($value)
    {
        $variable = new Variable($value);
        $isNull = $variable->isNull();
        $this->assertInstanceOf(VariableInterface::class, $isNull);
        $this->assertInstanceOf(Variable::class, $isNull);
        $this->assertSame(false, $isNull->getValue());
    }

    /**
     * @dataProvider provideMethodIsNullTrue
     *
     * @param null $value
     *
     * @return void
     */
    public function testMethodIsNullTrue($value)
    {
        $variable = new Variable($value);
        $isNull = $variable->isNull();
        $this->assertInstanceOf(VariableInterface::class, $isNull);
        $this->assertInstanceOf(Variable::class, $isNull);
        $this->assertSame(true, $isNull->getValue());
    }

    /**
     * @return void
     */
    public function testMethodIsNumericDefault()
    {
        $variable = new Variable();
        $isNumeric = $variable->isNumeric();
        $this->assertInstanceOf(VariableInterface::class, $isNumeric);
        $this->assertInstanceOf(Variable::class, $isNumeric);
        $this->assertSame(false, $isNumeric->getValue());
    }

    /**
     * @dataProvider provideMethodIsNumericFalse
     *
     * @param mixed $value
     *
     * @return void
     */
    public function testMethodIsNumericFalse($value)
    {
        $variable = new Variable($value);
        $isNumeric = $variable->isNumeric();
        $this->assertInstanceOf(VariableInterface::class, $isNumeric);
        $this->assertInstanceOf(Variable::class, $isNumeric);
        $this->assertSame(false, $isNumeric->getValue());
    }

    /**
     * @dataProvider provideMethodIsNumericTrue
     *
     * @param mixed $value
     *
     * @return void
     */
    public function testMethodIsNumericTrue($value)
    {
        $variable = new Variable($value);
        $isNumeric = $variable->isNumeric();
        $this->assertInstanceOf(VariableInterface::class, $isNumeric);
        $this->assertInstanceOf(Variable::class, $isNumeric);
        $this->assertSame(true, $isNumeric->getValue());
    }

    /**
     * @return void
     */
    public function testMethodIsScalarDefault()
    {
        $variable = new Variable();
        $isScalar = $variable->isScalar();
        $this->assertInstanceOf(VariableInterface::class, $isScalar);
        $this->assertInstanceOf(Variable::class, $isScalar);
        $this->assertSame(false, $isScalar->getValue());
    }

    /**
     * @dataProvider provideMethodIsScalarFalse
     *
     * @param mixed $value
     *
     * @return void
     */
    public function testMethodIsScalarFalse($value)
    {
        $variable = new Variable($value);
        $isScalar = $variable->isScalar();
        $this->assertInstanceOf(VariableInterface::class, $isScalar);
        $this->assertInstanceOf(Variable::class, $isScalar);
        $this->assertSame(false, $isScalar->getValue());
    }

    /**
     * @dataProvider provideMethodIsScalarTrue
     *
     * @param mixed $value
     *
     * @return void
     */
    public function testMethodIsScalarTrue($value)
    {
        $variable = new Variable($value);
        $isScalar = $variable->isScalar();
        $this->assertInstanceOf(VariableInterface::class, $isScalar);
        $this->assertInstanceOf(Variable::class, $isScalar);
        $this->assertSame(true, $isScalar->getValue());
    }

    /**
     * @return void
     */
    public function testMethodIsStringDefault()
    {
        $variable = new Variable();
        $isString = $variable->isString();
        $this->assertInstanceOf(VariableInterface::class, $isString);
        $this->assertInstanceOf(Variable::class, $isString);
        $this->assertSame(false, $isString->getValue());
    }

    /**
     * @dataProvider provideMethodIsStringFalse
     *
     * @param mixed $value
     *
     * @return void
     */
    public function testMethodIsStringFalse($value)
    {
        $variable = new Variable($value);
        $isString = $variable->isString();
        $this->assertInstanceOf(VariableInterface::class, $isString);
        $this->assertInstanceOf(Variable::class, $isString);
        $this->assertSame(false, $isString->getValue());
    }

    /**
     * @dataProvider provideMethodIsStringTrue
     *
     * @param string $value
     *
     * @return void
     */
    public function testMethodIsStringTrue($value)
    {
        $variable = new Variable($value);
        $isString = $variable->isString();
        $this->assertInstanceOf(VariableInterface::class, $isString);
        $this->assertInstanceOf(Variable::class, $isString);
        $this->assertSame(true, $isString->getValue());
    }
}
