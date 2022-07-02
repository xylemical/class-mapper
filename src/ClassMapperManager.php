<?php

declare(strict_types=1);

namespace Xylemical\ClassMapper;

/**
 * Provides a class mapper manager.
 */
class ClassMapperManager implements ClassMapperManagerInterface {

  /**
   * The class mappers.
   *
   * @var \Xylemical\ClassMapper\ClassMapperInterface[]
   */
  protected array $mappers = [];

  /**
   * {@inheritdoc}
   */
  public function getMapper(string $class): ?ClassMapperInterface {
    return $this->mappers[$class] ?? NULL;
  }

  /**
   * Add a class mapper.
   *
   * @param \Xylemical\ClassMapper\ClassMapperInterface $mapper
   *   The class mapper.
   *
   * @return $this
   */
  public function addMapper(ClassMapperInterface $mapper): static {
    $this->mappers[$mapper->getType()] = $mapper;
    return $this;
  }

}
