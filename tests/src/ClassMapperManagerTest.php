<?php

declare(strict_types=1);

namespace Xylemical\ClassMapper;

use PHPUnit\Framework\TestCase;
use Prophecy\PhpUnit\ProphecyTrait;

/**
 * Tests \Xylemical\ClassMapper\ClassMapperManager.
 */
class ClassMapperManagerTest extends TestCase {

  use ProphecyTrait;

  /**
   * Tests sanity.
   */
  public function testSanity(): void {
    $mapper = $this->prophesize(ClassMapperInterface::class);
    $mapper->getType()->willReturn(ClassMapperInterface::class);
    $mapper = $mapper->reveal();

    $manager = new ClassMapperManager();
    $manager->addMapper($mapper);

    $this->assertSame($mapper, $manager->getMapper(ClassMapperInterface::class));
    $this->assertNull($manager->getMapper(ClassMapper::class));
  }

}
