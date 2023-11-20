<?php

namespace App\StructuralPatterns\Flyweight;

use App\Dinosaur;

/*
* Flyweight パターン
* 同じインスタンスを共有することで、無駄なインスタンスを生成しないようにして、 プログラム全体を軽くする。
* 
* 使用例：
* ```php
* $factory = new DinosaurFlyweightFactory();
* 
* $dinosaurs = [];
* $dinosaurs[] = $factory->get('T-Rex', 5);
* $dinosaurs[] = $factory->get('Triceratops', 3);
* $dinosaurs[] = $factory->get('T-Rex', 5); // 同じインスタンスが再利用される
* $dinosaurs[] = $factory->get('Velociraptor', 2);
* 
* foreach ($dinosaurs as $dinosaur) {
*   echo $dinosaur->getName() . ' (' . $dinosaur->getAge() . '): ' . $dinosaur->roar() . PHP_EOL;
* }
* 
* echo 'Factory pool size = ' . $factory->getPoolSize() . PHP_EOL; // 同等のkey はインスタンスを再生成しないため、pool sizeは3となる。
* ```
*/

class DinosaurFlyweightFactory
{
  private array $pool = [];

  public function get(string $name, int $age): Dinosaur
  {
    $key = $name . '_' . $age;

    if (!isset($this->pool[$key])) {
      $this->pool[$key] = new Dinosaur($name, $age);
    }

    return $this->pool[$key];
  }

  public function getPoolSize(): int
  {
    return count($this->pool);
  }
}
