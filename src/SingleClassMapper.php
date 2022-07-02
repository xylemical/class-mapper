<?php

declare(strict_types=1);

namespace Xylemical\ClassMapper;

/**
 * Provides a single class mapper.
 */
class SingleClassMapper extends ClassMapper implements SingleClassMapperInterface {

  /**
   * {@inheritdoc}
   */
  public function getClass(string $name): string {
    return array_search($name, $this->map) ?: '';
  }

}
