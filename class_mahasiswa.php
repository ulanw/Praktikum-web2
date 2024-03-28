<?php
class NilaiSiswa {
    public $nama;
    public $nilai;
    public $matakuliah;

}



$nilaisiswa = new NilaiSiswa();
$nilaisiswa->nama = "Wulan Ramadani";
$nilaisiswa->nilai = 100;
$nilaisiswa->matakuliah = "matematika";

echo 'Nama Mahasiswa : '.$nilaisiswa->nama. '<br>';
echo 'Nilai : '.$nilaisiswa->nilai. '<br>';
echo 'Mata Kuliah : '.$nilaisiswa->matakuliah. '<br>';
?>