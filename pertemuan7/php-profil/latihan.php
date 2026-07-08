<?php
// variable
$nama = "Raditya Ahmad Pratama";
$nim = "3337250052";
$ipk = 4.0;
$aktif = true;
$skills = ["Networking", "Python", "C++", "HTML"];

// Output ke Browser
echo "<h1>Halo, {$nama}!</h1>";
echo "<p>NIM: {$nim}</p>";
echo "<p>IPK: {$ipk}</p>";

// Kondisional
if ($ipk >= 3.75) {
    echo "<p><strong>Status: Cumlaude 🌟</strong></p>";
} elseif ($ipk >= 3.0) {
    echo "<p>Status: Sangat Memuaskan</p>";
} else {
    echo "<p>Status: Kurang Memuaskan</p>";
}

// Foreach
echo "<ul>";
foreach ($skills as $item) {
    echo "<li>{$item}</li>";
}
echo "</ul>";
?>