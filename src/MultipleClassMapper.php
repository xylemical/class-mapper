<?php

declare(strict_types=1);

namespace Xylemical\ClassMapper;

/**
 * Provides multiple class mapper implementation.
 */
class MultipleClassMapper extends ClassMapper implements MultipleClassMapperInterface {

  /**
   * {@inheritdoc}
   */
  public function getClasses(string $name): array {
    $classes = [];
    foreach ($this->map as $class => $value) {
      if ($value === $name) {
        $classes[] = $class;
      }
    }
    return $classes;
  }

}
