<?php 

declare(strict_types=1);

namespace inheritance;

class Toaster {

  public array $slices = [];
  public int $size = 3;

  public function addSlice(string $slice) : void {
    if (count($this->slices) < $this->size) {
      $this->slices[] = $slice;
    }
  }

  public function toast() {
    foreach($this->slices as $i => $slice) {
      echo ($i + 1) . '. toasting ' . $slice . "<br />" . PHP_EOL;
    }
  }
}
