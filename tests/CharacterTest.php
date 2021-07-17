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
use PHPUnit_Framework_TestCase;
use Quorrax\Classes\Variable;
use Quorrax\Classes\Variables\Boolean;
use Quorrax\Classes\Variables\Character;
use Quorrax\Interfaces\Variable as VariableInterface;
use Quorrax\Interfaces\Variables\Boolean as BooleanInterface;
use Quorrax\Interfaces\Variables\Character as CharacterInterface;

/**
 * @package Quorrax\Tests
 */
class CharacterTest extends PHPUnit_Framework_TestCase
{
    /**
     * @return array
     */
    private function getValues()
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
     * @dataProvider \Quorrax\Tests\BooleanTest::provideMethodConstruct
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
}
