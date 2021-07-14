# 2.0.0 #

## Added ##

* Added the `Quorrax\Classes\Variables\Boolean` class.
    * Added the `setValue` private method.
    * Added the `value` private property.
    * Added the `getValue` public method.
    * Added the `__construct` public method.
* Added the `Quorrax\Classes\Variables\Character` class.
    * Added the `setValue` private method.
    * Added the `value` private property.
    * Added the `getValue` public method.
    * Added the `__construct` public method.
* Added the `Quorrax\Interfaces\Variables\Boolean` interface.
    * Added the `getValue` public method.
    * Added the `__construct` public method.
* Added the `Quorrax\Interfaces\Variables\Character` interface.
    * Added the `getValue` public method.
    * Added the `__construct` public method.

## Changed ##

* Changed the `Quorrax\Classes\Variable` class, making it now abstract.
* Changed the `getValue` method in the `Quorrax\Classes\Variable` class, making it abstract.

## Removed ##

* Removed the `setValue` private method from the `Quorrax\Classes\Variable` class.
* Removed the `__construct` public method from the `Quorrax\Classes\Variable` class.
* Removed the `__construct` public method from the `Quorrax\Interfaces\Variable` interface.

# 1.4.0 #

## Added ##

* Added new methods to the `Quorrax\Classes\Variable` class:
    * Added the `getType` public method.
* Added new methods to the `Quorrax\Interfaces\Variable` interface:
    * Added the `getType` public method.

# 1.3.0 #

## Added ##

* Added the `isNull` public method to the `Quorrax\Classes\Variable` class.
* Added the `isNull` public method to the `Quorrax\Interfaces\Variable` interface.

# 1.2.0 #

## Added ##

* Added new methods to the `Quorrax\Classes\Variable` class:
    * Added the `isFloat` public method.
    * Added the `isInteger` public method.
    * Added the `isString` public method.
* Added new methods to the `Quorrax\Interfaces\Variable` interface:
    * Added the `isFloat` public method.
    * Added the `isInteger` public method.
    * Added the `isString` public method.

# 1.1.0 #

## Added ##

* Added the `isBoolean` public method to the `Quorrax\Classes\Variable` class.
* Added the `isBoolean` public method to the `Quorrax\Interfaces\Variable` interface.

# 1.0.0 #

## Added ##

* Added the `Quorrax\Classes\Variable` class.
    * Added the `setValue` private method.
    * Added the `variable` private property.
    * Added the `getValue` public method.
    * Added the `__construct` public method.
* Added the `Quorrax\Interfaces\Variable` interface.
    * Added the `getValue` public method.
    * Added the `__construct` public method.
