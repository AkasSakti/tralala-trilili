<?php
// Menghitung panjang string
$teks = "Hello, World!";
echo $teks;
echo "<br>";
echo strlen($teks); // Output: 13
echo "<br>";
// Mengubah string menjadi huruf kapital
echo strtoupper($teks); // Output: HELLO, WORLD!
echo "<br>";
// Mencari posisi pertama kemunculan kata 'World'
echo strpos($teks, "World"); // Output: 7
echo "<br>";
// Mengganti kata 'World' dengan 'PHP'
$baru = str_replace("World", "PHP", $teks);
echo $baru; // Output: Hello, PHP!
?>
