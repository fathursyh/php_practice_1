<?php

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
  echo $key+1 .'. ' . $nama_hewan . '<br/>'; // key is index
}
echo '<hr/>'; nl();

$celsius = 100;
$hasil = konversiCtoF($celsius);
echo $hasil;
