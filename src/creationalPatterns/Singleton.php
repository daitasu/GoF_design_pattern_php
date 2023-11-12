<?php

namespace App\CreationalPatterns;

use App\Dinosaur;

class DinosaurSingleton
{
  private static Dinosaur $instance = null;

  private function __construct()
  {
  }

  public static function getInstance(): Dinosaur
  {
    if (self::$instance === null) {
      self::$instance = new Dinosaur("SingletonDinosaur", 100);
    }
    return self::$instance;
  }
}
