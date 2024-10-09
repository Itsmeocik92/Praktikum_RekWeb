<?php

$jsonData = '{"Nama Mahasiswa":"Muhammad Aziz Inochi Syamadanny","NIM":"G.231.22.0092","Usia":19,"Hobi":["Travelling","Memancing","Voli"]}';

// Decode JSON ke dalam array PHP
$arrayData = json_decode($jsonData); 

echo "Data dalam format Array PHP: ";

// Loop melalui array dan cetak key-value tanpa tanda panah
foreach ($arrayData as $key => $value) {
    // Jika value adalah array (misalnya, Hobi), cetak item satu per satu
    if (is_array($value)) {
        echo $key . ": " . implode(", ", $value) . " ";
    } else {
        echo $key . ": " . $value . " ";
    }
}
?>