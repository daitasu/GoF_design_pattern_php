<?php

namespace App\CreationalPatterns;

use App\Dinosaur;

class DinosaurBuilder
{
  private string $name;
  private int $age;

  public function setName(string $name): self
  {
    $this->name = $name;
    return $this;
  }

  public function setAge(int $age): self
  {
    $this->age = $age;
    return $this;
  }

  public function build(): Dinosaur
  {
    return new Dinosaur($this->name, $this->age);
  }
}
