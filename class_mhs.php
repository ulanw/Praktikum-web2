<?php
    class Mahasiswa {
        var $nim, $mk, $nilai;

        function __construct($nim, $mk, $nilai) {
            $this->nim = $nim;
            $this->mk = $mk;
            $this->nilai = $nilai;
        }

        public function grade() {
            if ($this->nilai < 35 ) {
                return "E";
            } elseif ($this->nilai >= 36 && $this->nilai <= 55) {
                return "D";
            } elseif ($this->nilai >= 56 && $this->nilai <= 69) {
                return "C";
            } elseif ($this->nilai >= 70 && $this->nilai <= 84) {
                return "B";
            } elseif ($this->nilai >= 85 && $this->nilai <= 100) {
                return "A";
            } else {
                return "Tidak Lulus";
            }
        }

        public function kelulusan() {
            if ($this->nilai < 56) {
                return "TIDAK LULUS";
            } else {
                return "LULUS";
            }
           
        }
    }
?>
