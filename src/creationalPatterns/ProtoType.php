<?php

namespace App\CreationalPatterns\ProtoType;

use App\Dinosaur;

class DinosaurPrototype
{
  private Dinosaur $dinosaur;

  public function __construct(Dinosaur $dinosaur)
  {
    $this->dinosaur = $dinosaur;
  }

  public function clone(): Dinosaur
  {
    return clone $this->dinosaur;
  }
}
