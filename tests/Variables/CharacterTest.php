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

namespace Quorrax\Tests\Variables;

use Exception;
use Quorrax\Classes\Variable;
use Quorrax\Classes\Variables\Boolean;
use Quorrax\Classes\Variables\Character;
use Quorrax\Interfaces\Variable as VariableInterface;
use Quorrax\Interfaces\Variables\Boolean as BooleanInterface;
use Quorrax\Interfaces\Variables\Character as CharacterInterface;
use Quorrax\Tests\VariableTest;

/**
 * @package Quorrax\Tests\Variables
 */
class CharacterTest extends VariableTest
{
    /**
     * @return array
     */
    private function getValues()
    {
        return array_merge(
            $this->getValuesEmpty(),
            $this->getValuesEmptyNot()
        );
    }

    /**
     * @return array
     */
    private function getValuesEmpty()
    {
        return [
            [
                "",
            ],
            [
                "0",
            ],
        ];
    }

    /**
     * @return array
     */
    private function getValuesEmptyNot()
    {
        return [
            [
                "string",
            ],
            [
                "1",
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
    public function provideMethodIsEmptyDefaultFalse()
    {
        return $this->getValuesEmptyNot();
    }

    /**
     * @return array
     */
    public function provideMethodIsEmptyDefaultTrue()
    {
        return $this->getValuesEmpty();
    }

    /**
     * @return array
     */
    public function provideMethodIsEmptyFalse()
    {
        return $this->provideMethodIsEmptyTemplate($this->getValuesEmptyNot());
    }

    /**
     * @return array
     */
    public function provideMethodIsEmptyTrue()
    {
        return $this->provideMethodIsEmptyTemplate($this->getValuesEmpty());
    }

    /**
     * @return void
     */
    public function testExtensionVariable()
    {
        $this->assertInstanceOf(Variable::class, new Character());
    }

    /**
     * @return void
     */
    public function testImplementationCharacter()
    {
        $this->assertInstanceOf(CharacterInterface::class, new Character());
    }

    /**
     * @return void
     */
    public function testImplementationVariable()
    {
        $this->assertInstanceOf(VariableInterface::class, new Character());
    }

    /**
     * @dataProvider provideMethodConstruct
     *
     * @param string $value
     *
     * @return void
     */
    public function testMethodConstruct($value)
    {
        try {
            $this->assertInstanceOf(Character::class, new Character($value));
        } catch (Exception $exception) {
            $this->fail($exception);
        }
    }

    /**
     * @return void
     */
    public function testMethodConstructDefault()
    {
        $this->assertInstanceOf(Character::class, new Character());
    }

    /**
     * @dataProvider \Quorrax\Tests\Variables\BooleanTest::provideMethodConstruct
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
        new Character($value);
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
            $variable = new Character();
            $type = $variable->getType();
            $this->assertInstanceOf(CharacterInterface::class, $type);
            $this->assertInstanceOf(Character::class, $type);
            $this->assertSame("string", $type->getValue());
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
        $variable = new Character();
        $this->expectException(Exception::class);
        $this->expectExceptionCode(0);
        $this->expectExceptionMessage(""); // TODO: Define an exception message.
        $variable->getType($return);
    }

    /**
     * @dataProvider provideMethodGetValue
     *
     * @param string $value
     *
     * @return void
     */
    public function testMethodGetValue($value)
    {
        try {
            $variable = new Character($value);
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
        $variable = new Character();
        $this->assertSame("", $variable->getValue());
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
            $variable = new Character();
            $isBoolean = $variable->isBoolean($return);
            $this->assertInstanceOf(BooleanInterface::class, $isBoolean);
            $this->assertInstanceOf($return, $isBoolean);
            $this->assertSame(false, $isBoolean->getValue());
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
            $variable = new Character();
            $isBoolean = $variable->isBoolean();
            $this->assertInstanceOf(BooleanInterface::class, $isBoolean);
            $this->assertInstanceOf(Boolean::class, $isBoolean);
            $this->assertSame(false, $isBoolean->getValue());
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
        $variable = new Character();
        $this->expectException(Exception::class);
        $this->expectExceptionCode(0);
        $this->expectExceptionMessage(""); // TODO: Define an exception message.
        $variable->isBoolean($return);
    }

    /**
     * @dataProvider provideMethodIsEmpty
     *
     * @param string $return
     *
     * @return void
     */
    public function testMethodIsEmpty($return)
    {
        try {
            $variable = new Character();
            $isEmpty = $variable->isEmpty($return);
            $this->assertInstanceOf(BooleanInterface::class, $isEmpty);
            $this->assertInstanceOf($return, $isEmpty);
            $this->assertSame(true, $isEmpty->getValue());
        } catch (Exception $exception) {
            $this->fail($exception->getMessage());
        }
    }

    /**
     * @return void
     */
    public function testMethodIsEmptyDefault()
    {
        try {
            $variable = new Character();
            $isEmpty = $variable->isEmpty();
            $this->assertInstanceOf(BooleanInterface::class, $isEmpty);
            $this->assertInstanceOf(Boolean::class, $isEmpty);
            $this->assertSame(true, $isEmpty->getValue());
        } catch (Exception $exception) {
            $this->fail($exception->getMessage());
        }
    }

    /**
     * @dataProvider provideMethodIsEmptyDefaultFalse
     *
     * @param string $value
     *
     * @return void
     */
    public function testMethodIsEmptyDefaultFalse($value)
    {
        try {
            $variable = new Character($value);
            $isEmpty = $variable->isEmpty();
            $this->assertInstanceOf(BooleanInterface::class, $isEmpty);
            $this->assertInstanceOf(Boolean::class, $isEmpty);
            $this->assertSame(false, $isEmpty->getValue());
        } catch (Exception $exception) {
            $this->fail($exception->getMessage());
        }
    }

    /**
     * @dataProvider provideMethodIsEmptyDefaultTrue
     *
     * @param string $value
     *
     * @return void
     */
    public function testMethodIsEmptyDefaultTrue($value)
    {
        try {
            $variable = new Character($value);
            $isEmpty = $variable->isEmpty();
            $this->assertInstanceOf(BooleanInterface::class, $isEmpty);
            $this->assertInstanceOf(Boolean::class, $isEmpty);
            $this->assertSame(true, $isEmpty->getValue());
        } catch (Exception $exception) {
            $this->fail($exception->getMessage());
        }
    }

    /**
     * @dataProvider provideMethodIsEmptyException
     *
     * @param string $return
     *
     * @return void
     * @throws \Exception
     */
    public function testMethodIsEmptyException($return)
    {
        $variable = new Character();
        $this->expectException(Exception::class);
        $this->expectExceptionCode(0);
        $this->expectExceptionMessage(""); // TODO: Define an exception message.
        $variable->isEmpty($return);
    }

    /**
     * @dataProvider provideMethodIsEmptyFalse
     *
     * @param string $value
     * @param string $return
     *
     * @return void
     */
    public function testMethodIsEmptyFalse($value, $return)
    {
        try {
            $variable = new Character($value);
            $isEmpty = $variable->isEmpty($return);
            $this->assertInstanceOf(BooleanInterface::class, $isEmpty);
            $this->assertInstanceOf($return, $isEmpty);
            $this->assertSame(false, $isEmpty->getValue());
        } catch (Exception $exception) {
            $this->fail($exception->getMessage());
        }
    }

    /**
     * @dataProvider provideMethodIsEmptyTrue
     *
     * @param string $value
     * @param string $return
     *
     * @return void
     */
    public function testMethodIsEmptyTrue($value, $return)
    {
        try {
            $variable = new Character($value);
            $isEmpty = $variable->isEmpty($return);
            $this->assertInstanceOf(BooleanInterface::class, $isEmpty);
            $this->assertInstanceOf($return, $isEmpty);
            $this->assertSame(true, $isEmpty->getValue());
        } catch (Exception $exception) {
            $this->fail($exception->getMessage());
        }
    }

    /**
     * @dataProvider provideMethodIsString
     *
     * @param string $return
     *
     * @return void
     */
    public function testMethodIsString($return)
    {
        try {
            $variable = new Character();
            $isString = $variable->isString($return);
            $this->assertInstanceOf(BooleanInterface::class, $isString);
            $this->assertInstanceOf($return, $isString);
            $this->assertSame(true, $isString->getValue());
        } catch (Exception $exception) {
            $this->fail($exception->getMessage());
        }
    }

    public function testMethodIsStringDefault()
    {
        try {
            $variable = new Character();
            $isString = $variable->isString();
            $this->assertInstanceOf(BooleanInterface::class, $isString);
            $this->assertInstanceOf(Boolean::class, $isString);
            $this->assertSame(true, $isString->getValue());
        } catch (Exception $exception) {
            $this->fail($exception->getMessage());
        }
    }

    /**
     * @dataProvider provideMethodIsStringException
     *
     * @param string $return
     *
     * @return void
     * @throws \Exception
     */
    public function testMethodIsStringException($return)
    {
        $variable = new Character();
        $this->expectException(Exception::class);
        $this->expectExceptionCode(0);
        $this->expectExceptionMessage(""); // TODO: Define an exception message.
        $variable->isString($return);
    }
}