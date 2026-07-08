<?php
// Array Asosiatif: pasangan kunci => nilai
$mahasiswa = [
    "nama" => "Raditya Ahmad Pratama",
    "nim" => "3337250052",
    "prodi" => "Informatika",
    "ipk" => 4.0,
    "skills" => ["Networking", "Python", "C++", "HTML"],
];

// Akses Nilai dengan Key
echo $mahasiswa["nama"];
echo $mahasiswa["ipk"];

// Array of arrays (daftar banyak mahasiswa)
$daftar = [
    ["nama" => "Budi", "ipk" => 3.85],
    ["nama" => "Ani", "ipk" => 3.72],
    ["nama" => "Citra", "ipk" => 3.91],
];

foreach ($daftar as $mhs) {
    echo "{$mhs['nama']} - IPK: {$mhs['ipk']}<br>";
}
?>