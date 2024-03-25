<?php

declare(strict_types=1);

use inheritance\Toaster;
include_once('./inheritance.php');

class ToasterPro extends Toaster {
  public int $size = 5;

  public function toastBagel() : void {
    foreach ($this->slices as $i => $bagel) {
      echo ($i + 1) . ". toasting " . $bagel . " with bagel option" . PHP_EOL . "<br />";
    }
  }
}

$bread = new ToasterPro();
$bread->addSlice('roti');
$bread->addSlice('donat');
$bread->addSlice('pie');
$bread->addSlice('ayam');
$bread->addSlice('sapi');
$bread->toast();
$bread->toastBagel();