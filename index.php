<?php
$data = array(0);

function hitung(){
  $total = 0;
  foreach ($GLOBALS['data'] as $key) {
    $total = $total + $key;
  }
  return $total;
}

function tambah($barang,$angka){
  echo "Anda telah membeli <b>".$barang."</b> dengan harga <b>Rp. ".$angka."</b><br>";
  array_push($GLOBALS['data'],$angka);
}

function cetakTotal(){
  echo "<hr>";
  echo "Total harga yang dibayar = ".hitung()."<br>";
}

function bayar($uang){
  $totalHarga = hitung();
  if($uang >= $totalHarga){
    $kembalian =  $uang - hitung();
    echo "Uang Anda = ".$uang."<br>";
    echo "Kembalian = ".$kembalian."<br>";
  }else{
    echo "<b>Uang Anda tidak cukup untuk membayar total belanjaan!</b><br>";
  }
}

function belanja($namaToko){
  echo "<h1>Selamat datang di ".$namaToko."</h1>";
  echo "<hr>";
  tambah("Roti",25000);
  tambah("Snack",15000);
  tambah("Susu",12000);
  tambah("Ice Cream",10000);
  cetakTotal();
  bayar(100000);
}

belanja("Maju Jaya");
?>
