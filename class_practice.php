<?php
echo "<p><br/>CLASS PRACTICE</p>";
$mobil1 = new Kendaraan('merah','sedan');
echo "saya memilki mobil $mobil1->jenis berwarna $mobil1->warna."; nl();

function getList($fileDir) {
  if(!file_exists($fileDir)) {
    trigger_error('File ' . $fileDir . ' does not exist', E_USER_ERROR);
  }

  $file = fopen($fileDir, 'r');
  $list = [];

  while (($item=fgetcsv($file))!==false) {
    $list[] = $item;
  } 
  return $list;
}
$path = $root.'php_practice_1/daftarMenu.csv';
$lists = getList($path);
print_r($lists);


