# ✖️➕➖➗ Math Eval Helper Function

[![Build Status](https://travis-ci.org/langleyfoxall/math_eval.svg?branch=master)](https://travis-ci.org/langleyfoxall/math_eval)
[![Coverage Status](https://coveralls.io/repos/github/langleyfoxall/math_eval/badge.svg?branch=master)](https://coveralls.io/github/langleyfoxall/math_eval?branch=master)
[![StyleCI](https://github.styleci.io/repos/155715123/shield?branch=master)](https://github.styleci.io/repos/155715123)
[![Packagist](https://img.shields.io/packagist/dt/langleyfoxall/math_eval.svg)](https://packagist.org/packages/langleyfoxall/math_eval/stats)

This PHP package provides a `math_eval` helper function, that
allows safe evaluation of mathematical expressions, without the use of the
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

This package makes use of the [`mossadal/math-parser`](https://github.com/mossadal/math-parser) package.
