<?php

## CEK FILE ADA ATAU TIDAK DI ROOT FOLDER WEB
if (file_exists('./functions.php')) {
  echo filesize('./functions.php'); // CEK SIZE FILE
} else {
  echo 'file not found';
}
