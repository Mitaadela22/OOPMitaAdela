<?php

Class OrangTua {
	public $nama = 'Mita';
	public $jenisKelamin = "Perempuan";

	public function makan() {
		return "{$this->nama} sedang makan <br>";
	}
}

Class AnakOrang extends OrangTua {

	public function biodata() {
		return "Nama : {$this->nama} <br>".
				"jenis Kelamin : {$this->jenisKelamin} <br>".
				"===========================================<p>";
	}
}


$anak = new AnakOrang;
$anak->nama = 'Mita';
$anak->jenisKelamin = "Perempuan";
echo $anak->biodata();
echo $anak->makan();