<?php
class PersegiPanjang {
    var $panjang;
    var $lebar;

    function panjangSisi($panjang){
        return $this->panjang = $panjang;
    }
    function lebarSisi($lebar){
        return $this->lebar = $lebar;
    }
    function getLuas(){
        return $this->panjang * $this->lebar;
    }
    function getKeliling(){
        return 2 * $this->panjang * $this->lebar;
    }
}
$hasil = new PersegiPanjang();

echo "Panjang sisi dari persegi panjang adalah : " .$hasil->panjangSisi(30);
echo "<br/>Lebar sisi dari persegi panjang adalah : " .$hasil->lebarSisi(5);
echo "<br/>Luas Persegi Panjang : ".$hasil->getLuas();
echo "<br/>Keliling Persegi Panjang : ".$hasil->getKeliling();
?>