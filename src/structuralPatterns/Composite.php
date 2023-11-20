<?php

namespace App\StructuralPatterns\Composite;

use App\Dinosaur;

/*
* Composite パターン
* ディレクトリとファイルなどのような、木構造を伴う再帰的なデータ構造を表すことができる。
* 例:恐竜class で表現するのは難しいが、表現するなら恐竜Group class みたいなときに木構造で考えると使えそう。
*/

class DinosaurGroup
{
  private array $dinosaurs = [];

  public function addDinosaur(Dinosaur $dinosaur)
  {
    $this->dinosaurs[] = $dinosaur;
  }

  public function roarAll(): string
  {
    $roars = array_map(function ($dinosaur) {
      return $dinosaur->roar();
    }, $this->dinosaurs);

    return implode(' ', $roars);
  }
}
