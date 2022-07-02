<?php

declare(strict_types=1);

namespace Xylemical\ClassMapper;

use PHPUnit\Framework\TestCase;

/**
 * Tests \Xylemical\ClassMapper\MultipleClassMapper.
 */
class MultipleClassMapperTest extends TestCase {

  /**
   * Tests sanity.
   */
  public function testSanity(): void {
    $mapper = new MultipleClassMapper(ClassMapperInterface::class, [
      ClassMapper::class => 'a',
      ClassMapperManager::class => 'a',
      ClassMapperInterface::class => 'b',
    ]);

    $this->assertEquals(ClassMapperInterface::class, $mapper->getType());
    $this->assertEquals('a', $mapper->getName(ClassMapper::class));
    $this->assertEquals([
      ClassMapper::class,
      ClassMapperManager::class,
    ], $mapper->getClasses('a'));
    $this->assertEquals([ClassMapperInterface::class], $mapper->getClasses('b'));
    $this->assertEquals([], $mapper->getClasses('c'));
  }

}
