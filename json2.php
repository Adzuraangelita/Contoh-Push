<?php
// file json yang akan dibaca
$file ="anggota.json";

//mendapatkan file json 
$anggota = file_get_contents($file);

// mencode anggota json 
$data = json_decode($anggota, true);

// membaca/menampilkan data array menggunakan foreach
foreach ($data as $key => $d){
    echo "No : " .$d['no']. "<br>";
    echo " Nama : " .$d['nama']. "<br>";
    echo "Jurusan : " .$d['jurusan']. "<br><br>";
}
?>