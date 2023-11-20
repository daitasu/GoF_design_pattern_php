<?php

namespace App\StructuralPatterns\Facade;

use App\Dinosaur;

/*
* Facade パターン
* Facade = 「建物の正面」。複雑なAPIや複数の相互作用するクラスの集まりを簡素化するのに役立つ。
* 異なるサブシステムを単純な操作だけを持ったFacadeクラスで結び、サブシステム間の独立性を高める事を目的とする。
* 例：恐竜 class と相互作用のあるclass がいくつかあるとして、それらを結びつけてクライアント側で扱いやすくする。
* ```php
* $facade = new App\StructuralPatterns\Facade\DinosaurFacade();
* $tyrannosaurus = $facade->createTyrannosaurus(5);
* echo $facade->getDinosaurRoar($tyrannosaurus);  // Roar!
* $triceratops = $facade->createTriceratops(3);
* echo $facade->getDinosaurRoar($triceratops);  // Roar!
* ```
* 今回はDinosaur classしか立ててないので利便性がいまいちだが、相互作用の多い振る舞いテストでは便利そう。
*/

class DinosaurFacade
{
  public function createTyrannosaurus(int $age): Dinosaur
  {
    return new Dinosaur("Tyrannosaurus", $age);
  }

  public function createTriceratops(int $age): Dinosaur
  {
    return new Dinosaur("Triceratops", $age);
  }

  public function getDinosaurRoar(Dinosaur $dinosaur): string
  {
    return $dinosaur->roar();
  }
}
