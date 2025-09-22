<?php
// Commit 1 – Setup awal
$nama_barang = ["Teh Pucuk", "Sukro", "Sprite", "Coca-Cola", "Aqua", "Chitato", "Indomie", "Silverqueen"];
$harga_barang = [5000, 7000, 8000, 10000, 4000, 12000, 3500, 15000];

echo "<h3>--POLGAN MART--</h3>";
echo "Daftar Pembelian<br><br>";

// Commit 2 – Logika pembelian
$beli = [];
$jumlah = [];
$total = [];
$grandtotal = 0;

// misalnya kita pilih 5 barang random
for ($i = 0; $i < 5; $i++) {
    $index = array_rand($nama_barang);
    $beli[] = $nama_barang[$index];
    $jumlah[] = rand(1, 5);
    $total[] = 0;
}

// Commit 3 – Perhitungan total
foreach ($beli as $key => $barang) {
    $harga = $harga_barang[array_search($barang, $nama_barang)];
    $total[$key] = $harga * $jumlah[$key];
    $grandtotal += $total[$key];

    echo "Nama Barang : " . $barang . "<br>";
    echo "Harga Barang : " . $harga . "<br>";
    echo "Jumlah Beli : " . $jumlah[$key] . "<br>";
    echo "Total Harga : " . $total[$key] . "<br><br>";
}


?>
