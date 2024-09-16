<!DOCTYPE html>
<html>
<head>
    <title>Hitung Total Nilai</title>
    <script>
        function submitForm() {
            // Mengakses nilai elemen formulir
            var nama = document.getElementById('nama').value;
            var nim = document.getElementById('nim').value;
            var total_tugas = parseFloat(document.getElementById('total_tugas').value);
            var total_pbl = parseFloat(document.getElementById('total_pbl').value);
            var uts = parseFloat(document.getElementById('uts').value);
            var uas = parseFloat(document.getElementById('uas').value);

            // Menghitung total nilai
            var total_nilai = total_tugas * 0.05 + total_pbl * 0.75 + uts * 0.10 + uas * 0.10;

            // Menentukan kategori nilai akhir
            var kategori_nilai = '';
            if (total_nilai >= 80) {
                kategori_nilai = 'A';
            } else if (total_nilai >= 75 && total_nilai < 80) {
                kategori_nilai = 'B+';
            } else if (total_nilai >= 70 && total_nilai < 75) {
                kategori_nilai = 'B';
            } else if (total_nilai >= 60 && total_nilai < 70) {
                kategori_nilai = 'C+';
            } else if (total_nilai >= 50 && total_nilai < 60) {
                kategori_nilai = 'C';
            } else if (total_nilai >= 40 && total_nilai < 50) {
                kategori_nilai = 'D+';
            } else {
                kategori_nilai = 'E';
            }

            // Mendapatkan referensi tabel
            var table = document.getElementById('nilaiTable');

            // Membuat baris baru
            var newRow = table.insertRow(-1);

            // Menambahkan sel baru dan mengisinya dengan nilai
            var cells = [];
            for (var i = 0; i < 9; i++) {
                cells[i] = newRow.insertCell(i);
            }
            cells[0].innerHTML = nama;
            cells[1].innerHTML = nim;
            cells[2].innerHTML = total_tugas;
            cells[3].innerHTML = total_pbl;
            cells[4].innerHTML = uts;
            cells[5].innerHTML = uas;
            cells[6].innerHTML = total_nilai.toFixed(2); // Menampilkan total nilai dengan 2 angka desimal
            cells[7].innerHTML = kategori_nilai; // Menampilkan kategori nilai akhir

            // Membersihkan nilai formulir setelah pengiriman
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
  echo "Hello " .$_SESSION['user'];
?>
    <h2>Hitung Total Nilai Murid</h2>
    <form onsubmit="submitForm(); return false;">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama"><br><br>
        
        <label for="nim">NIM:</label>
        <input type="text" id="nim" name="nim"><br><br>
        
        <label for="total_tugas">Total Tugas:</label>
        <input type="text" id="total_tugas" name="total_tugas"><br><br>
        
        <label for="total_pbl">Total PBL:</label>
        <input type="text" id="total_pbl" name="total_pbl"><br><br>
        
        <label for="uts">UTS:</label>
        <input type="text" id="uts" name="uts"><br><br>
        
        <label for="uas">UAS:</label>
        <input type="text" id="uas" name="uas"><br><br>
        
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
