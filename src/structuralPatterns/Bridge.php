<?php

namespace App\StructuralPatterns\Bridge;

use App\Dinosaur;

/*
* Bridge パターン
* 抽象と実装を分離して、独立に変更できるようにする。
* 例:恐竜class の振る舞いを抽象化して振る舞いは継承先に任せる。恐竜class 自体は固定にするなど。
*/

abstract class DinosaurBehaviour
{
  protected Dinosaur $dinosaur;

  public function __construct(Dinosaur $dinosaur)
  {
    $this->dinosaur = $dinosaur;
  }

  abstract public function doSomething(): string;
}

class DinosaurRoarBehaviour extends DinosaurBehaviour
{
  public function doSomething(): string
  {
    return $this->dinosaur->roar();
  }
}
