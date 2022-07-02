<?php

declare(strict_types=1);

namespace Xylemical\ClassMapper;

use PHPUnit\Framework\TestCase;

/**
 * Tests \Xylemical\ClassMapper\SingleClassMapper.
 */
class SingleClassMapperTest extends TestCase {

  /**
   * Tests sanity.
   */
  public function testSanity(): void {
    $mapper = new SingleClassMapper(ClassMapperInterface::class, [
      ClassMapper::class => 'a',
      ClassMapperManager::class => 'a',
      ClassMapperInterface::class => 'b',
    ]);

    $this->assertEquals(ClassMapperInterface::class, $mapper->getType());
    $this->assertEquals('a', $mapper->getName(ClassMapper::class));
    $this->assertEquals(ClassMapper::class, $mapper->getClass('a'));
    $this->assertEquals(ClassMapperInterface::class, $mapper->getClass('b'));
    $this->assertEquals('', $mapper->getClass('c'));
  }

}
