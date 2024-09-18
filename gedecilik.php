<?php
// Fungsi untuk menentukan bilangan terbesar dari dua bilangan
function bilanganTerbesar($bil1, $bil2) {
    if ($bil1 > $bil2) {
        return $bil1;
    } else {
        return $bil2;
    }
}

// Contoh penggunaan fungsi bilanganTerbesar
$bil1 = 100;
$bil2 = 150;
echo "Bilangan terbesar antara $bil1 dan $bil2 adalah: " . bilanganTerbesar($bil1, $bil2) . "<br>";

// Menampilkan Tanggal, Bulan, dan Tahun sekarang dengan fungsi getdate()
$sekarang = getdate();
echo "Sekarang adalah tanggal: " . $sekarang['mday'] . "-" . $sekarang['mon'] . "-" . $sekarang['year'] . "<br>";

// Menampilkan Tanggal, Bulan, dan Tahun sekarang dengan fungsi date('d-F-Y')
echo "Tanggal sekarang (format d-F-Y): " . date('d-F-Y');
?>
