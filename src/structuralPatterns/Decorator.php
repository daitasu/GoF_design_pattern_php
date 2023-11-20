<?php

namespace App\StructuralPatterns\Decorator;

use App\Dinosaur;

/*
* Decorator パターン
* オブジェクトに動的に新しい機能や振る舞いを追加するために使用する。
* 例:恐竜の振る舞いの拡張など
*/

class DinosaurDecorator
{
  protected Dinosaur $dinosaur;

  public function __construct(Dinosaur $dinosaur)
  {
    $this->dinosaur = $dinosaur;
  }

  public function roarLoudly(): string
  {
    return strtoupper($this->dinosaur->roar());
  }
}
