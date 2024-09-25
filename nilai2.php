<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hitung Total Nilai</title>
    <script>
        // Class Nilai untuk menyimpan data siswa dan menghitung total nilai
        class Nilai {
            constructor(nama, nim, totalTugas, totalPbl, uts, uas) {
                this.nama = nama;
                this.nim = nim;
                this.totalTugas = totalTugas;
                this.totalPbl = totalPbl;
                this.uts = uts;
                this.uas = uas;
            }

            // Method untuk menghitung total nilai
            hitungTotalNilai() {
                return this.totalTugas * 0.05 + this.totalPbl * 0.75 + this.uts * 0.10 + this.uas * 0.10;
            }

            // Method untuk menentukan kategori nilai akhir
            kategoriNilai(totalNilai) {
                if (totalNilai >= 80) {
                    return 'A';
                } else if (totalNilai >= 75 && totalNilai < 80) {
                    return 'B+';
                } else if (totalNilai >= 70 && totalNilai < 75) {
                    return 'B';
                } else if (totalNilai >= 60 && totalNilai < 70) {
                    return 'C+';
                } else if (totalNilai >= 50 && totalNilai < 60) {
                    return 'C';
                } else if (totalNilai >= 40 && totalNilai < 50) {
                    return 'D+';
                } else {
                    return 'E';
                }
            }

            // Method untuk menambahkan data ke tabel
            tambahKeTabel() {
                const totalNilai = this.hitungTotalNilai();
                const kategori = this.kategoriNilai(totalNilai);

                // Mendapatkan referensi tabel
                const table = document.getElementById('nilaiTable');

                // Membuat baris baru
                const newRow = table.insertRow(-1);

                // Menambahkan sel baru dan mengisinya dengan nilai
                newRow.insertCell(0).innerHTML = this.nama;
                newRow.insertCell(1).innerHTML = this.nim;
                newRow.insertCell(2).innerHTML = this.totalTugas;
                newRow.insertCell(3).innerHTML = this.totalPbl;
                newRow.insertCell(4).innerHTML = this.uts;
                newRow.insertCell(5).innerHTML = this.uas;
                newRow.insertCell(6).innerHTML = totalNilai.toFixed(2); // Menampilkan total nilai dengan 2 angka desimal
                newRow.insertCell(7).innerHTML = kategori; // Menampilkan kategori nilai akhir
            }
        }

        // Fungsi untuk mengambil data dari form dan membuat objek Nilai
        function submitForm() {
            // Mengambil nilai dari form
            const nama = document.getElementById('nama').value;
            const nim = document.getElementById('nim').value;
            const totalTugas = parseFloat(document.getElementById('total_tugas').value);
            const totalPbl = parseFloat(document.getElementById('total_pbl').value);
            const uts = parseFloat(document.getElementById('uts').value);
            const uas = parseFloat(document.getElementById('uas').value);

            // Membuat objek Nilai dan menambahkannya ke tabel
            const nilai = new Nilai(nama, nim, totalTugas, totalPbl, uts, uas);
            nilai.tambahKeTabel();

            // Membersihkan nilai form setelah pengiriman
            document.getElementById('nama').value = '';
            document.getElementById('nim').value = '';
            document.getElementById('total_tugas').value = '';
            document.getElementById('total_pbl').value = '';
            document.getElementById('uts').value = '';
            document.getElementById('uas').value = '';
        }
    </script>
</head>
<body>
    <?php
        session_start();
        echo "Hello " . $_SESSION['user'];
    ?>
    <h2>Hitung Total Nilai Murid</h2>
    <form onsubmit="submitForm(); return false;">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" required><br><br>

        <label for="nim">NIM:</label>
        <input type="text" id="nim" name="nim" required><br><br>

        <label for="total_tugas">Total Tugas:</label>
        <input type="number" step="0.01" id="total_tugas" name="total_tugas" required><br><br>

        <label for="total_pbl">Total PBL:</label>
        <input type="number" step="0.01" id="total_pbl" name="total_pbl" required><br><br>

        <label for="uts">UTS:</label>
        <input type="number" step="0.01" id="uts" name="uts" required><br><br>

        <label for="uas">UAS:</label>
        <input type="number" step="0.01" id="uas" name="uas" required><br><br>

        <input type="submit" value="Hitung Total Nilai">
    </form>

    <!-- Tabel untuk menampilkan data siswa -->
    <table border="1" id="nilaiTable">
        <tr>
            <th>Nama</th>
            <th>NIM</th>
            <th>Total Tugas</th>
            <th>Total PBL</th>
            <th>UTS</th>
            <th>UAS</th>
            <th>Total Nilai</th>
            <th>Kategori Nilai Akhir</th>
        </tr>
    </table>
    <a href="logout.php">Logout</a>
</body>
</html>
