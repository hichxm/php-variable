<?php

namespace Quorrax\Interfaces;

/**
 * @package Quorrax\Interfaces
 */
interface Variable
{
    /**
     * @return mixed
     */
    public function getValue();

    /**
     * @param mixed $value
     */
    public function __construct($value);
}
