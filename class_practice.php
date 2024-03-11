<?php

declare(strict_types=1);


echo "<p><br/>CLASS PRACTICE</p>";
$mobil1 = new kelas\Kendaraan('merah','sedan');
echo "saya memilki mobil $mobil1->jenis berwarna $mobil1->warna"; nl();


function getList($fileDir) {
  if(!file_exists($fileDir)) {
    trigger_error('File ' . $fileDir . ' does not exist', E_USER_ERROR);
  }

  $file = fopen($fileDir, 'r');
  $list = [];
  fgetcsv($file);
  while (($item=fgetcsv($file))!==false) {
    $list[] = $item;
  } 
  return $list;
}
$path = $root.'php_practice_1/daftarMenu.csv';
$lists = getList($path);
nl();
$makan = [];
foreach($lists as $x => $daftar) {
  $newObject[$x] = new kelas\Makanan($daftar[0], (int)$daftar[1], $daftar[2]);
  array_push($makan, $newObject[$x]);
}

echo '<hr/>';
foreach($makan as $x =>$objek) {
  foreach ($objek as $att =>$item) {
    echo "$att : $item <br/>";
  }
  echo '<hr/>';
}
nl();// next
$tokoBunga = new Toko(nomorToko: 4, nama: 'Florist');
foreach($tokoBunga as $att => $value) {
  if ($att === 'nomorToko') {
    echo "nomor : $value <br/>"; // ganti nama attribute class biar gaya
    continue;
  }
  echo "$att : $value <br/>";
}



