# Class mapper

Provides framework for providing mapper of classes to names.

## Install

The recommended way to install this library is [through composer](http://getcomposer.org).

```sh
composer require xylemical/class-mapper
```

## Usage

```php

use Xylemical\ClassMapper\SingleClassMapper;
use Xylemical\ClassMapper\MultipleClassMapper;
use Xylemical\ClassMapper\ClassMapperManager;

$manager = new ClassMapperManager();

$mapper = new SingleClassMapper('SingleInterface', [
  Implementation::class => 'implementation',
]);
$manager->addMapper($mapper);

$name = $mapper->getName(Implementation::class); // $name == 'implementation'
$class = $mapper->getClass('implementation');  // $class == Implementation::class

$mapper = new MultipleClassMapper('MultipleInterface', [
  Implementation1::class => 'implementation',
  Implementation2::class => 'implementation',
])
$manager->addMapper($mapper);

$name = $mapper->getName(Implementation1::class); // $name == 'implementation'
$class = $mapper->getClasses('implementation'); // $class == [Implementation1::class, Implementation2::class]

$mapper = $manager->getMapper('SingleInterface'); // $mapper == SingleClassMapper
$mapper = $manager->getMapper('MultipleInterface'); // $mapper == MultipleClassMapper.

```


## License

MIT, see LICENSE.
