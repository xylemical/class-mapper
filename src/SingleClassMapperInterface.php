<?php

declare(strict_types=1);

namespace Xylemical\ClassMapper;

/**
 * Provides a single class mapper.
 */
interface SingleClassMapperInterface extends ClassMapperInterface {

  /**
   * Get the class name.
   *
   * @param string $name
   *   The name.
   *
   * @return string
   *   The class name or empty string.
   */
  public function getClass(string $name): string;

}
