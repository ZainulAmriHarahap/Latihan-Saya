<?php // ekstensi php

Class Nilai{ // memberi class nilai
    protected $cek_nilai; // diprotected supaya tidak bisa diakses fungsi lain
    public function setNilai($nilai){ // fungsi untuk set nilai
    if ($nilai >= 60){ // fungsi percabangan set nilai dimana nilai 60
        $this->cek_nilai = "Anda Lulus"; // this untuk menyatakan dimana lulus 
    }else{  // percabangan jika tidak
        $this->cek_nilai = "Anda Tidak Lulus"; // this untuk menyatakan tidak lulus

    } // kurung kurawal tutup else
    }  // kurungn kkurawal tutup set nilai

    public function getNilai(){ // fungsi untuk get nilai 
        return $this->cek_nilai; // mendapatkan keterangan nilai dari cek nilai 
    } // kurungkurawal tutup get nilai
} //kurung kurawal tutup  class nilai

$obj = new Nilai;  // oop membuat nilai baru
$obj->setNilai(50); // set nilai baru jadi yang dibaca adalah nilai ini
echo $obj->getNilai(); // echo getnilai untuk cetak nilai lulus atau tidak lulus
?>