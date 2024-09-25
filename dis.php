<!DOCTYPE html>
<html>
<head>
    <title>Hitung Diskon Ganda</title>
</head>
<body>
    <h1>Hitung Diskon Ganda</h1>
    <form method="POST" action="">
        <label for="harga_awal">Masukkan Harga Awal:</label>
        <input type="number" id="harga_awal" name="harga_awal" required>
        <button type="submit">Hitung</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Ambil input harga awal dari form
        $hargaAwal = $_POST['harga_awal'];

        // Class Diskon untuk menghitung diskon ganda
        class Diskon
        {
            private $hargaAwal;

            // Constructor untuk inisialisasi harga awal
            public function __construct($hargaAwal)
            {
                $this->hargaAwal = $hargaAwal;
            }

            // Method untuk menghitung diskon pertama 10%
            private function diskonPertama()
            {
                return $this->hargaAwal * 0.1;
            }

            // Method untuk menghitung diskon kedua 15% setelah diskon pertama
            private function diskonKedua($hargaSetelahDiskonPertama)
            {
                return $hargaSetelahDiskonPertama * 0.15;
            }

            // Method untuk menghitung harga akhir setelah diskon ganda
            public function hitungHargaAkhir()
            {
                $hargaSetelahDiskonPertama = $this->hargaAwal - $this->diskonPertama();
                $hargaSetelahDiskonKedua = $hargaSetelahDiskonPertama - $this->diskonKedua($hargaSetelahDiskonPertama);
                
                return $hargaSetelahDiskonKedua;
            }
        }

        // Membuat objek dari class Diskon
        $diskon = new Diskon($hargaAwal);

        // Menghitung harga akhir setelah diskon
        $hargaAkhir = $diskon->hitungHargaAkhir();

        // Menampilkan hasil
        echo "<p>Harga akhir setelah diskon ganda adalah: Rp " . number_format($hargaAkhir, 2, ',', '.') . "</p>";
    }
    ?>
</body>
</html>
