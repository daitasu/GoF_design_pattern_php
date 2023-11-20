<?php

namespace App\CreationalPatterns\Build;

use App\Dinosaur;

class DinosaurBuilder
{
  private ?string $name = null;
  private ?int $age = null;

  public function setAttributes(array $attributes): self
  {
    if (isset($attributes['name'])) {
      $this->name = $attributes['name'];
    }
    if (isset($attributes['age'])) {
      $this->age = $attributes['age'];
    }
    return $this;
  }

  public function build(): Dinosaur
  {
    if ($this->name === null || $this->age === null) {
      throw new \InvalidArgumentException("Name and age must be set.");
    }
    return new Dinosaur($this->name, $this->age);
  }
}
