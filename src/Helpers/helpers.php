<?php

use Quorrax\Classes\Variable;

if(!function_exists('variable')) {
    
    /**
     * Return an instance of Variable class
     *
     * @param mixed $value
     * @return Variable
     */
    function variable($value = null) 
    {
        return new Variable($value);
    }
    
}
