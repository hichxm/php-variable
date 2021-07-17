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

use Exception;
use PHPUnit\Framework\TestCase;
use Quorrax\Classes\Variable;
use Quorrax\Classes\Variables\Boolean;
use Quorrax\Classes\Variables\Character;
use Quorrax\Interfaces\Variable as VariableInterface;
use Quorrax\Interfaces\Variables\Boolean as BooleanInterface;
use Quorrax\Interfaces\Variables\Character as CharacterInterface;

/**
 * @package Quorrax\Tests
 */
class BooleanTest extends TestCase
{
    /**
     * @return array
     */
    private function getValues()
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
    public function provideMethodConstruct()
    {
        return $this->getValues();
    }

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
    public function provideMethodGetValue()
    {
        return $this->getValues();
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

    /**
     * @return void
     */
    public function testExtensionVariable()
    {
        $this->assertInstanceOf(Variable::class, new Boolean());
    }

    /**
     * @return void
     */
    public function testImplementationBoolean()
    {
        $this->assertInstanceOf(BooleanInterface::class, new Boolean());
    }

    /**
     * @return void
     */
    public function testImplementationVariable()
    {
        $this->assertInstanceOf(VariableInterface::class, new Boolean());
    }

    /**
     * @dataProvider provideMethodConstruct
     *
     * @param bool $value
     *
     * @return void
     */
    public function testMethodConstruct($value)
    {
        try {
            $this->assertInstanceOf(Boolean::class, new Boolean($value));
        } catch (Exception $exception) {
            $this->fail($exception->getMessage());
        }
    }

    public function testMethodConstructDefault()
    {
        $this->assertInstanceOf(Boolean::class, new Boolean());
    }

    /**
     * @dataProvider \Quorrax\Tests\CharacterTest::provideMethodConstruct
     *
     * @param mixed $value
     *
     * @return void
     * @throws \Exception
     */
    public function testMethodConstructException($value)
    {
        $this->expectException(Exception::class);
        $this->expectExceptionCode(0);
        $this->expectExceptionMessage(""); // TODO: Define an exception message.
        new Boolean($value);
    }

    /**
     * @dataProvider provideMethodGetType
     *
     * @param string $return
     *
     * @return void
     */
    public function testMethodGetType($return)
    {
        try {
            $variable = new Boolean();
            $type = $variable->getType($return);
            $this->assertInstanceOf(CharacterInterface::class, $type);
            $this->assertInstanceOf($return, $type);
            $this->assertSame("boolean", $type->getValue());
        } catch (Exception $exception) {
            $this->fail($exception->getMessage());
        }
    }

    /**
     * @return void
     */
    public function testMethodGetTypeDefault()
    {
        try {
            $variable = new Boolean();
            $type = $variable->getType();
            $this->assertInstanceOf(CharacterInterface::class, $type);
            $this->assertInstanceOf(Character::class, $type);
            $this->assertSame("boolean", $type->getValue());
        } catch (Exception $exception) {
            $this->fail($exception->getMessage());
        }
    }

    /**
     * @dataProvider provideMethodGetTypeException
     *
     * @param string $return
     *
     * @return void
     * @throws \Exception
     */
    public function testMethodGetTypeException($return)
    {
        $variable = new Boolean();
        $this->expectException(Exception::class);
        $this->expectExceptionCode(0);
        $this->expectExceptionMessage(""); // TODO: Define an exception message.
        $variable->getType($return);
    }

    /**
     * @dataProvider provideMethodGetValue
     *
     * @param bool $value
     *
     * @return void
     */
    public function testMethodGetValue($value)
    {
        try {
            $variable = new Boolean($value);
            $this->assertSame($value, $variable->getValue());
        } catch (Exception $exception) {
            $this->fail($exception->getMessage());
        }
    }

    /**
     * @return void
     */
    public function testMethodGetValueDefault()
    {
        $variable = new Boolean();
        $this->assertSame(false, $variable->getValue());
    }

    /**
     * @dataProvider provideMethodIsBoolean
     *
     * @param string $return
     *
     * @return void
     */
    public function testMethodIsBoolean($return)
    {
        try {
            $variable = new Boolean();
            $isBoolean = $variable->isBoolean($return);
            $this->assertInstanceOf(BooleanInterface::class, $isBoolean);
            $this->assertInstanceOf($return, $isBoolean);
            $this->assertSame(true, $isBoolean->getValue());
        } catch (Exception $exception) {
            $this->fail($exception->getMessage());
        }
    }

    /**
     * @return void
     */
    public function testMethodIsBooleanDefault()
    {
        try {
            $variable = new Boolean();
            $isBoolean = $variable->isBoolean();
            $this->assertInstanceOf(BooleanInterface::class, $isBoolean);
            $this->assertInstanceOf(Boolean::class, $isBoolean);
            $this->assertSame(true, $isBoolean->getValue());
        } catch (Exception $exception) {
            $this->fail($exception->getMessage());
        }
    }

    /**
     * @dataProvider provideMethodIsBooleanException
     *
     * @param string $return
     *
     * @return void
     * @throws \Exception
     */
    public function testMethodIsBooleanException($return)
    {
        $variable = new Boolean();
        $this->expectException(Exception::class);
        $this->expectExceptionCode(0);
        $this->expectExceptionMessage(""); // TODO: Define an exception message.
        $variable->isBoolean($return);
    }
}
