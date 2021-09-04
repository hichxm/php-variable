<?php

namespace Quorrax\Tests\Classes;

use PHPUnit\Framework\TestCase;
use Quorrax\Interfaces\Variable;

class VariableTest extends TestCase
{

    public function testVariableFunctionReturnVariableInterfaceWithoutArgument()
    {
        $this->assertInstanceOf(variable(), Variable::class);
    }

    public function testVariableFunctionReturnVariableInterfaceWithArgument()
    {
        $this->assertInstanceOf(variable('some random argument'), Variable::class);
    }
    
}
