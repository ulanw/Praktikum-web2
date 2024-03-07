<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $customer = $_POST["customer"];
    $produk = $_POST["produk"];
    $jumlah = $_POST["jumlah"];

    $harga = 0;
    switch (strtolower($produk)) {
    case "tv":
    $harga = 4200000;
    break;
    case "kulkas":
    $harga = 3100000;
    break;
    case "mesin cuci":
    $harga = 3800000;
    break;
    }

      $total = $harga * $jumlah;

     echo "<div class='alert alert-dark'>";
     echo "<p><strong>Hasil Belanja</strong></p>";
     echo "<p><strong>Nama Customer:</strong> $customer</p>";
     echo "<p><strong>Produk Pilihan:</strong> " . strtoupper($produk) . "</p>"; 
     echo "<p><strong>Jumlah Beli:</strong> $jumlah</p>";
     echo "<p><strong>Total Belanja:</strong> Rp " . number_format($total, 0, ',', '.') . "</p>";
     echo "</div>";
     }
 ?>