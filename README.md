# ✖️➕➖➗ Math Eval Helper Function

This PHP package provides a `math_eval` helper function, that allows
allows safe evaluation mathematical expressions, within the use of the
potentially dangerous `eval` function.

## Installation

The `math_eval` package can be easily installed using Composer. Just 
run the following command from the root of your project.

```
composer require "langleyfoxall/math_eval"
```

If you have never used the Composer dependency manager before, head 
to the [Composer website](https://getcomposer.org/) for more 
information on how to get started.

## Usage

To evaluate a basic mathematical expression, just pass its string
representation to the `math_eval` function.

Here are some basic usage examples:

```php
$two = math_eval('1 + 1');
$three = math_eval('5 - 2');
$ten = math_eval('2 * 5');
$four = math_eval('8 / 2');
```

It is also possible to pass expression variables. See the examples below.

```php
$ten = math_eval('a + b', ['a' => 7, 'b' => 3]);
$fifteen = math_eval('x * y', ['x' => 3, 'y' => 5]);
```

## Credit

This package makes use the [`mossadal/math-parser`](https://github.com/mossadal/math-parser) package.