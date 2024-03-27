<?php 

declare(strict_types=1);

namespace inheritance;

class Toaster {

  public array $slices = [];
  public int $size = 3;

  function __construct(array $items) {
    if(!$items) {
      throw new \Exception("The ToasterPro constructor arguments cannot be an empty array.");
    }
    foreach ($items as $item) {
      if (count($this->slices) < $this->size){
        $this->slices[] = $item;
      }
      
    }
  }

  public function addSlice(string $slice) : void {
    if (count($this->slices) < $this->size) {
      $this->slices[] = $slice;
    }
  }

  public function toast() {
    foreach($this->slices as $i => $slice) {
      echo  ($i + 1) . '. toasting ' . $slice . "<br />" . PHP_EOL;
    }
  }
}
