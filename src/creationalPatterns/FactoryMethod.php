<?php

namespace App\CreationalPatterns\FactoryMethod;

use App\Dinosaur;

abstract class DinosaurCreator
{
  abstract public function createDinosaur(): Dinosaur;
}

class TyrannosaurusCreator extends DinosaurCreator
{
  public function createDinosaur(): Dinosaur
  {
    return new Dinosaur("Tyrannosaurus", 30);
  }
}
