<?php
$filename = "contoh.txt";
// Memeriksa apakah file ada
if (file_exists($filename)) {
    echo "File $filename ditemukan.";
} else {
    echo "File $filename tidak ditemukan.";
}
// Membaca isi file
$isiFile = file_get_contents($filename);
echo $isiFile;
// Menulis ke file
$fp = fopen($filename, "w");
fwrite($fp, "Ini adalah teks baru yang ditulis ke file.");
fclose($fp);
// Menghapus file
if (unlink($filename)) {
    echo "File $filename telah dihapus.";
} else {
    echo "File $filename gagal dihapus.";
}
?>
