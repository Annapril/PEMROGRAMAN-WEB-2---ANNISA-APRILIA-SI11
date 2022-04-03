<?php
    class NilaiMahasiswa {
    public $matkul;
    public $nilai;
    public $nim;

    function __construct($matkul, $nilai , $nim){
        $this->matkul = $matkul;
        $this->nilai = $nilai;
        $this->nim = $nim;
    }
    function hitungNilai(){
        return $this->nilai;
    }
    function kelulusan($keterangan){
        if($keterangan > 55){
            return 'Anda Lulus';
        }else{
            return 'anda tidak lulus';
        }
    }
    function grade($keterangan){
        if($keterangan >= 85 && $keterangan == 100){
            return 'A'; 
        }else if($keterangan >= 70 && $keterangan <= 84){
            return 'B';
        }else if($keterangan >= 56 && $keterangan <= 69){
            return 'C';
        }else if($keterangan >= 36 && $keterangan <= 55){
            return 'D';
        }else if($keterangan >= 10 && $keterangan <= 54){
            return 'E';
        }else{
            return 'I';
        }
    }
}
?>