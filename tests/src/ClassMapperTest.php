<?php

declare(strict_types=1);

namespace Xylemical\ClassMapper;

use PHPUnit\Framework\TestCase;

/**
 * Tests \Xylemical\ClassMapper\ClassMapper.
 */
class ClassMapperTest extends TestCase {

  /**
   * Tests sanity.
   */
  public function testSanity(): void {
    $mapper = new ClassMapper(ClassMapperInterface::class, [
      ClassMapper::class => 'a',
      ClassMapperManager::class => 'a',
      ClassMapperInterface::class => 'b',
    ]);

    $this->assertEquals(ClassMapperInterface::class, $mapper->getType());
    $this->assertEquals('a', $mapper->getName(ClassMapper::class));
  }

}
