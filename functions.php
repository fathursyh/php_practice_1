<?php

declare(strict_types=1);

function nl()
{
  echo "<br>";
}
function tp($a)
{
  print $a;
}

function konversiCtoF(int $celsius) {
  $fahrenheit = ($celsius * 9/5) + 32;
  return $fahrenheit;
}

function sum(...$numbers) { // bisa nerima banyak parameter sebagai array
  return array_sum($numbers);
}

function mobil(string $tipe, string $warna) : string {
  return $tipe . ' dan ' . $warna;
} // named arguments example