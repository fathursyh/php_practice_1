<?php
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