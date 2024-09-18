<!DOCTYPE html>
<html>
<head>
    <title>Bilangan Terbesar</title>
</head>
<body>
    <form method="post" action="">
        <label for="bil1">Masukkan bilangan 1:</label>
        <input type="number" name="bil1" id="bil1" required><br><br>

        <label for="bil2">Masukkan bilangan 2:</label>
        <input type="number" name="bil2" id="bil2" required><br><br>

        <input type="submit" value="Hitung Bilangan Terbesar">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Ambil input dari user
        $bil1 = $_POST['bil1'];
        $bil2 = $_POST['bil2'];

        // Fungsi untuk menentukan bilangan terbesar dari dua bilangan
        function bilanganTerbesar($bil1, $bil2) {
            if ($bil1 > $bil2) {
                return $bil1;
            } else {
                return $bil2;
            }
        }

        // Tampilkan bilangan terbesar
        echo "Bilangan terbesar antara $bil1 dan $bil2 adalah: " . bilanganTerbesar($bil1, $bil2) . "<br>";

        // Menampilkan Tanggal, Bulan, dan Tahun sekarang dengan fungsi getdate()
        $sekarang = getdate();
        echo "Sekarang adalah tanggal: " . $sekarang['mday'] . "-" . $sekarang['mon'] . "-" . $sekarang['year'] . "<br>";

        // Menampilkan Tanggal, Bulan, dan Tahun sekarang dengan fungsi date('d-F-Y')
        echo "Tanggal sekarang (format d-F-Y): " . date('d-F-Y');
    }
    ?>
</body>
</html>
