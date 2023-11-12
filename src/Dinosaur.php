<?php

namespace App;

class Dinosaur
{
  private string $name;
  private int $age;

  public function __construct(string $name, int $age)
  {
    $this->name = $name;
    $this->age = $age;
  }

  public function getName(): string
  {
    return $this->name;
  }

  public function getAge(): int
  {
    return $this->age;
  }

  public function roar(): string
  {
    return "Roar!";
  }
}
