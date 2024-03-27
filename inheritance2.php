<?php

declare(strict_types=1);

use inheritance\Toaster;
include_once('./inheritance.php');


class ToasterPro extends Toaster {

  function __construct(array $items, $size) {
    parent::__construct($items);
    $this->size = $size;
  }

  public function toastBagel() : void {
    foreach ($this->slices as $i => $bagel) {
      echo  ($i + 1) . ". toasting " . $bagel . " with bagel option" . PHP_EOL . "<br />";
    }
  }
}
echo '<br><hr><br>';
echo "<p>Inheritance Practices </br></p>";
$roti = new Toaster(['pizza']);
$roti->addSlice('mie');
$bread = new ToasterPro(['tes'], 9);
$bread->addSlice('roti');
$bread->toastBagel();

