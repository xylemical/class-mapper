<?php

declare(strict_types=1);

namespace Xylemical\ClassMapper;

/**
 * Provides a class mapper.
 */
interface ClassMapperInterface {

  /**
   * Get the class type for the class mapper.
   *
   * @return string
   *   The class/interface/trait name.
   */
  public function getType(): string;

  /**
   * Get the name for the class.
   *
   * @param string $class
   *   The class name.
   *
   * @return string
   *   The name.
   */
  public function getName(string $class): string;

}
