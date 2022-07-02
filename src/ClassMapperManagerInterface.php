<?php

declare(strict_types=1);

namespace Xylemical\ClassMapper;

/**
 * Provides a class mapper manager.
 */
interface ClassMapperManagerInterface {

  /**
   * Get the mapper for a given class.
   *
   * @param string $class
   *   The class.
   *
   * @return \Xylemical\ClassMapper\ClassMapperInterface|null
   *   The class mapper.
   */
  public function getMapper(string $class): ?ClassMapperInterface;

}
