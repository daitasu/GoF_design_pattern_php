<?php

namespace App\StructuralPatterns\Adapter;

use App\Dinosaur;

/*
* Adapter パターン
* インターフェースの互換性がないクラスを結合させるために使用する。
* 例:オブジェクトを特定のフォーマットに変換するなど。
*/

interface DinosaurAdapter
{
  public function getDinosaurData(): array;
}

class DinosaurArrayAdapter implements DinosaurAdapter
{
  private Dinosaur $dinosaur;

  public function __construct(Dinosaur $dinosaur)
  {
    $this->dinosaur = $dinosaur;
  }

  public function getDinosaurData(): array
  {
    return [
      'name' => $this->dinosaur->getName(),
      'age' => $this->dinosaur->getAge(),
      'roar' => $this->dinosaur->roar()
    ];
  }
}
