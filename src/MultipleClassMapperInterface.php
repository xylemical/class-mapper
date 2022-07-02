<?php

declare(strict_types=1);

namespace Xylemical\ClassMapper;

/**
 * Provides a name to multiple class mapper.
 */
interface MultipleClassMapperInterface extends ClassMapperInterface {

  /**
   * Get the classes representing the name.
   *
   * @param string $name
   *   The name.
   *
   * @return string[]
   *   The classes.
   */
  public function getClasses(string $name): array;

}
