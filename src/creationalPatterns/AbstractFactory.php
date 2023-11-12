<?php

namespace App\CreationalPatterns;

use App\Dinosaur;

interface DinosaurFactory
{
  public function createDinosaur(): Dinosaur;
}

class TyrannosaurusFactory implements DinosaurFactory
{
  public function createDinosaur(): Dinosaur
  {
    return new Dinosaur("Tyrannosaurus", 30);
  }
}

class TriceratopsFactory implements DinosaurFactory
{
  public function createDinosaur(): Dinosaur
  {
    return new Dinosaur("Triceratops", 25);
  }
}
