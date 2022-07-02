<?php

declare(strict_types=1);

namespace Xylemical\ClassMapper;

/**
 * Provides a generic class mapper.
 */
class ClassMapper implements ClassMapperInterface {

  /**
   * The class/interface/trait name.
   *
   * @var string
   */
  protected string $type;

  /**
   * The class map.
   *
   * @var string[]
   */
  protected array $map = [];

  /**
   * ClassMapper constructor.
   *
   * @param string $type
   *   The class type.
   * @param string[] $map
   *   The class to name map, indexed by class name.
   */
  public function __construct(string $type, array $map = []) {
    $this->type = $type;
    $this->map = $map;
  }

  /**
   * {@inheritdoc}
   */
  public function getType(): string {
    return $this->type;
  }

  /**
   * {@inheritdoc}
   */
  public function getName(string $class): string {
    return $this->map[$class] ?? '';
  }

}
