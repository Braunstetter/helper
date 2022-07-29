# Helper

[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/Braunstetter/helper/badges/quality-score.png?b=main)](https://scrutinizer-ci.com/g/Braunstetter/helper/?branch=main)
[![Code Coverage](https://scrutinizer-ci.com/g/Braunstetter/helper/badges/coverage.png?b=main)](https://scrutinizer-ci.com/g/Braunstetter/helper/?branch=main)
[![Total Downloads](http://poser.pugx.org/braunstetter/helper/downloads)](https://packagist.org/packages/braunstetter/helper)
[![License](http://poser.pugx.org/braunstetter/helper/license)](https://packagist.org/packages/braunstetter/helper)

A bundle for sharing usefully stuff around several projects.

* [Installation](#installation)
* [Array](#array)
  * [attachClass](#attachclass)
  * [attach](#attach)
  * [firstValue](#firstvalue)


## Installation

```shell
composer require braunstetter/helper
```

## Array

### attachClass

This method is just handy when it comes to add a class to an existing class string.

```php
Braunstetter\Helper\Arr::attachClass([ 'class' => 'mx-4 my-2' ], 'container')

# output:
# ['class' => 'mx-4 my-2 container']
```

### attach

Sometimes just want to add some new attribute to an existing string.

```php
Braunstetter\Helper\Arr::attach(
    [ 'data-controller' => 'example'],
    [ 'data-controller' => 'another-example']
)

# output: 
# ['data-controller' => 'example another-example']
```

### firstValue

Returns the first value of a given array. If the array is empty it returns null.

```php
Braunstetter\Helper\Arr::firstValue([
    3 => 'first',
    2 => 'second',
    0 => 'third'
])

# output:
# first
```