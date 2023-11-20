<?php

namespace App\StructuralPatterns\Proxy;

use App\Dinosaur;

/*
* Proxy パターン
* 全く別物のインタフェースとして作成し、重い計算処理など時間がかかるものを遅延実行させるなどに用いる。
* 使用例はProxyExample を参照。
*/

class DinosaurProxy
{
  private string $name;
  private int $age;
  private ?Dinosaur $dinosaur = null;

  public function __construct(string $name, int $age)
  {
    $this->name = $name;
    $this->age = $age;
  }

  private function getDinosaur(): Dinosaur
  {
    if ($this->dinosaur === null) {
      // Dinasaur class の生成に時間のかかる操作があるとする。
      $this->dinosaur = new Dinosaur($this->name, $this->age);
      echo "Loading Dinosaur data for " . $this->name . PHP_EOL;
    }
    return $this->dinosaur;
  }

  public function roar(): string
  {
    return $this->getDinosaur()->roar();
  }
}

// 使用例
class ProxyExample
{
  public function exec(): void
  {
    $dinosaur1 = new DinosaurProxy('T-Rex', 5);
    $dinosaur2 = new DinosaurProxy('Triceratops', 3);

    echo $dinosaur1->roar() . PHP_EOL; // ここで初めてT-Rexがロードされる
    echo $dinosaur2->roar() . PHP_EOL; // ここで初めてTriceratopsがロードされる  
  }
}
