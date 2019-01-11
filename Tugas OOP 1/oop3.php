<?ph
Class OrangTua {
	public $nama = 'Mita';
	public $jenisKelamin = "Perempuan";

	public function setData($nm = 'Mita Adela', $jk = 'Perempuan'){
		$this->nama = $nm;
		$this->jenisKelamin = $jk;
	}

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
$anak->setData('Mita','Perempuan');
echo $anak->biodata();
echo $anak->makan();