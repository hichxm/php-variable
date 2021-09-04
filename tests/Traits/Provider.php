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

namespace Quorrax\Tests\Traits;

use Quorrax\Classes\Variable;
use stdClass;

/**
 * @package Quorrax\Tests\Traits
 */
trait Provider
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
            $this->getValuesNull(),
            $this->getValuesString()
        );
    }

    /**
     * @return array
     */
    private function getValuesBoolean()
    {
        return array_merge(
            $this->getValuesBooleanEmpty(),
            $this->getValuesBooleanEmptyNot()
        );
    }

    /**
     * @return array
     */
    private function getValuesBooleanEmpty()
    {
        return [
            [
                false,
            ],
        ];
    }

    /**
     * @return array
     */
    private function getValuesBooleanEmptyNot()
    {
        return [
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
        return array_merge(
            $this->getValuesFloatEmpty(),
            $this->getValuesFloatEmptyNot()
        );
    }

    /**
     * @return array
     */
    private function getValuesFloatEmpty()
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
    private function getValuesFloatEmptyNot()
    {
        return [
            [
                0.1,
            ],
        ];
    }

    /**
     * @return array
     */
    private function getValuesInteger()
    {
        return array_merge(
            $this->getValuesIntegerEmpty(),
            $this->getValuesIntegerEmptyNot()
        );
    }

    /**
     * @return array
     */
    private function getValuesIntegerEmpty()
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
    private function getValuesIntegerEmptyNot()
    {
        return [
            [
                1,
            ],
        ];
    }

    /**
     * @return array
     */
    private function getValuesNull()
    {
        return [
            [
                null,
            ],
        ];
    }

    /**
     * @return array
     */
    private function getValuesString()
    {
        return array_merge(
            $this->getValuesStringEmptyNotNumeric(),
            $this->getValuesStringEmptyNotNumericNot(),
            $this->getValuesStringEmptyNumeric(),
            $this->getValuesStringEmptyNumericNot()
        );
    }

    /**
     * @return array
     */
    private function getValuesStringEmptyNotNumeric()
    {
        return [
            [
                "1",
            ],
        ];
    }

    /**
     * @return array
     */
    private function getValuesStringEmptyNotNumericNot()
    {
        return [
            [
                "string",
            ],
        ];
    }

    /**
     * @return array
     */
    private function getValuesStringEmptyNumeric()
    {
        return [
            [
                "0",
            ],
        ];
    }

    /**
     * @return array
     */
    private function getValuesStringEmptyNumericNot()
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
    public function provideMethodGetTypeBooleanReturnCustom()
    {
        $data = [];
        $returns = [Variable::class];
        foreach ($returns as $return) {
            foreach ($this->getValuesBoolean() as $value) {
                $value[] = $return;
                array_push($data, $value);
            }
        }
        return $data;
    }

    /**
     * @return array
     */
    public function provideMethodGetTypeBooleanReturnDefault()
    {
        return $this->getValuesBoolean();
    }

    /**
     * @return array
     */
    public function provideMethodGetTypeDefaultReturnCustom()
    {
        return [
            [
                Variable::class,
            ],
        ];
    }

    /**
     * @return array
     */
    public function provideMethodGetTypeDouble()
    {
        return $this->getValuesFloat();
    }

    /**
     * @return array
     */
    public function provideMethodGetTypeExceptionInvalidArgument()
    {
        return array_merge(
            $this->getValuesBoolean(),
            $this->getValuesFloat(),
            $this->getValuesInteger(),
            $this->getValuesNull()
        );
    }

    /**
     * @return array
     */
    public function provideMethodGetTypeExceptionUnexpectedValue()
    {
        return [
            [
                stdClass::class,
            ],
        ];
    }

    /**
     * @return array
     */
    public function provideMethodGetTypeInteger()
    {
        return $this->getValuesInteger();
    }

    /**
     * @return array
     */
    public function provideMethodGetTypeNull()
    {
        return $this->getValuesNull();
    }

    /**
     * @return array
     */
    public function provideMethodGetTypeString()
    {
        return $this->getValuesString();
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
            $this->getValuesNull(),
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
     * @return array
     */
    public function provideMethodIsEmptyFalse()
    {
        return array_merge(
            $this->getValuesBooleanEmptyNot(),
            $this->getValuesFloatEmptyNot(),
            $this->getValuesIntegerEmptyNot(),
            $this->getValuesStringEmptyNotNumeric(),
            $this->getValuesStringEmptyNotNumericNot()
        );
    }

    /**
     * @return array
     */
    public function provideMethodIsEmptyTrue()
    {
        return array_merge(
            $this->getValuesBooleanEmpty(),
            $this->getValuesFloatEmpty(),
            $this->getValuesIntegerEmpty(),
            $this->getValuesStringEmptyNumeric(),
            $this->getValuesStringEmptyNumericNot()
        );
    }

    /**
     * @return array
     */
    public function provideMethodIsFloatFalse()
    {
        return array_merge(
            $this->getValuesBoolean(),
            $this->getValuesInteger(),
            $this->getValuesNull(),
            $this->getValuesString()
        );
    }

    /**
     * @return array
     */
    public function provideMethodIsFloatTrue()
    {
        return $this->getValuesFloat();
    }

    /**
     * @return array
     */
    public function provideMethodIsIntegerFalse()
    {
        return array_merge(
            $this->getValuesBoolean(),
            $this->getValuesFloat(),
            $this->getValuesNull(),
            $this->getValuesString()
        );
    }

    /**
     * @return array
     */
    public function provideMethodIsIntegerTrue()
    {
        return $this->getValuesInteger();
    }

    /**
     * @return array
     */
    public function provideMethodIsNullFalse()
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
    public function provideMethodIsNullTrue()
    {
        return $this->getValuesNull();
    }

    /**
     * @return array
     */
    public function provideMethodIsNumericFalse()
    {
        return array_merge(
            $this->getValuesBoolean(),
            $this->getValuesNull(),
            $this->getValuesStringEmptyNumericNot(),
            $this->getValuesStringEmptyNotNumericNot()
        );
    }

    /**
     * @return array
     */
    public function provideMethodIsNumericTrue()
    {
        return array_merge(
            $this->getValuesFloat(),
            $this->getValuesInteger(),
            $this->getValuesStringEmptyNumeric(),
            $this->getValuesStringEmptyNotNumeric()
        );
    }

    /**
     * @return array
     */
    public function provideMethodIsScalarFalse()
    {
        return $this->getValuesNull();
    }

    /**
     * @return array
     */
    public function provideMethodIsScalarTrue()
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
    public function provideMethodIsStringFalse()
    {
        return array_merge(
            $this->getValuesBoolean(),
            $this->getValuesFloat(),
            $this->getValuesInteger(),
            $this->getValuesNull()
        );
    }

    /**
     * @return array
     */
    public function provideMethodIsStringTrue()
    {
        return $this->getValuesString();
    }
}
