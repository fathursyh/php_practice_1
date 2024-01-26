<?php

## CEK FILE ADA ATAU TIDAK DI ROOT FOLDER WEB
if (file_exists('./functions.php')) {
  echo filesize('./functions.php'); // CEK SIZE FILE
} else {
  echo 'file not found';
}
echo '<br/>';
// mkdir('./tes', 0777, true);

## OPEN FILE

if (!file_exists('./tes/tess.txt')) {
  echo 'file not found';
  return;
} else {
  echo 'file opened';
  $file = fopen('./tes/tess.txt', 'r');
}
nl();
while (($line = fgets($file)) !== false) {
  echo $line , '<br />';
}

fclose($file);


