<?php

declare(strict_types=1);
nl();

# PRACTICE 2

$score = 44;

# ALTERNATIVE IF CONDITIONAL #
echo "<p>ALTERNATIVE IF CONDITIONAL <br/></p>";
echo $score;
nl();
if ($score > 85) : echo "diatas 85";
elseif ($score > 75) : echo "diatas 75";
elseif ($score > 60) : echo "diatas 60";
else : echo "dibawah kkm";
endif;
echo "<hr />";
nl();
# BREAK NESTED LOOPS
echo "<p>WHILE LOOPS WITH BREAK LEVEL 2<br/></p>";
$i = 0;
$j = 0;
while (true) {
  while ($i > 10) {
    echo $j;
    $j++;
    if ($j >= 5) {
      break 2; // break loop level 2
    }
  }
  echo $i;
  $i++;
}
echo "<hr />";
nl();

# FOR EACH LOOP (ARRAY)
echo "<p>FOR EACH LOOP (ARRAY)<br/></p>";
foreach ($hewan as $nama_hewan) {
  echo $nama_hewan . '<br/>';
}
echo '<hr/>';
nl();

# FOR EACH LOOP with KEY (ARRAY)
echo "<p>FOR EACH LOOP WITH KEY (ARRAY)<br/></p>";
foreach ($hewan as $key => $nama_hewan) {
  echo $key + 1 . '. ' . $nama_hewan . '<br/>'; // key is index
}
echo '<hr/>';
nl();

echo '<p> FUNCTIONS </p>';
$celsius = 100;
$hasil = konversiCtoF($celsius);
echo $hasil;
nl();
echo sum(5, 2, 6, 10, 14);
echo sum(...[40, 20, 50, 10]); // kalo mau terima array harus pake ... biar iterate satu2
nl();
echo mobil(warna: 'merah', tipe: 'sedan');

$list1 = [1, 2, 3, 4];

$list2 = array_map(function ($element) { # masukin array ke fungsi array
  return $element * 2;
}, $list1);

echo '<pre>';
print_r($list1);
print_r($list2);
echo '</pre>';

nl();
date_default_timezone_set('Asia/Jakarta');
echo date('d-F-Y / g: i a', strtotime('now'));
nl();

$merged = array_merge($list1, $list2); // gabung array
print_r ($merged);
echo array_search('2', $list1);

## asort(); fungsi sort array || ksort(); sort by key 

// trigger_error('program error', E_USER_ERROR);

function errorHandler(int $type, string $msg, ?string $file = null, ?int $line = null) {
  echo $type .': '. $msg .' in ' . $file . ' on line ' . $line;
  exit;
} # CUSTOM ERROR HANDLER

set_error_handler('errorHandler', E_ALL);

echo $dummy;


