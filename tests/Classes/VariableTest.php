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
use Quorrax\Tests\Interfaces\VariableTest as VariableTestInterface;

/**
 * @package Quorrax\Tests\Classes
 */
class VariableTest extends TestCase implements VariableTestInterface
{
    /**
     * @return array
     */
    private function getValues()
    {
        return array_merge(
            $this->getValuesBoolean(),
            $this->getValuesFloat(),
            $this->getValuesInteger(),
            $this->getValuesString()
        );
    }

    /**
     * @return array
     */
    private function getValuesBoolean()
    {
        return [
            [
                false,
            ],
            [
                true,
            ],
        ];
    }

    /**
     * @return array
     */
    private function getValuesFloat()
    {
        return [
            [
                0.0,
            ],
        ];
    }

    /**
     * @return array
     */
    private function getValuesInteger()
    {
        return [
            [
                0,
            ],
        ];
    }

    /**
     * @return array
     */
    private function getValuesString()
    {
        return [
            [
                "",
            ],
        ];
    }

    /**
     * @return array
     */
    public function provideMethodConstruct()
    {
        return $this->getValues();
    }

    /**
     * @return array
     */
    public function provideMethodGetValue()
    {
        return $this->getValues();
    }

    /**
     * @return array
     */
    public function provideMethodIsBooleanFalse()
    {
        return array_merge(
            $this->getValuesFloat(),
            $this->getValuesInteger(),
            $this->getValuesString()
        );
    }

    /**
     * @return array
     */
    public function provideMethodIsBooleanTrue()
    {
        return $this->getValuesBoolean();
    }

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
}
