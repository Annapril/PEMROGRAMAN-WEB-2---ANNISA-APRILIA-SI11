<?php
//contoh function tidak menggunakan parameter
function nama (){
    $nama = "Annisa Aprilia";
    echo "Nama Saya Adalah $nama";
};
//contoh function menggunakan parameter
function umur_kelas($age){
    $umur = $age - 2022;
    $kelas = "SI 11";
    echo "<br/>Umur Saya Sekarang Adalah $umur <br/> Saya Kelas $kelas";
};
nama();
umur_kelas(2003);
?>