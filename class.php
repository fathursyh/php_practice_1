<?php
namespace kelas;
class Kendaraan {
  function __construct($warna, $jenis) {
    $this->warna = $warna;
    $this->jenis = $jenis;
  }
  public string $warna;
  public string $jenis;

}

abstract class Menu {
  
  public string $nama;
  public int $harga;
  public string $desc;
  
}


class Makanan extends Menu {
  function __construct(string $nama, int $harga, string $desc) {
    $this->nama = $nama;
    $this->harga = $harga;
    $this->desc = $desc;
  }
}

class Minuman extends Menu {
  function __construct(string $nama, int $harga, string $desc){
    $this->nama = $nama;
    $this->harga = $harga;
    $this->desc = $desc;
  }
}

class Toko {
  public string $nama;
  public int $nomorToko;
  function __construct(string $nama, int $nomorToko) {
    $this->nama = $nama;
    $this->nomorToko = $nomorToko;
  } 
}