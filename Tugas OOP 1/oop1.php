<?php

Class Orang {
	public $nama = 'Mita';
	public $jenisKelamin;

	public function makan()
	{
		return $this->nama.' sedang makan <br>';
	}
}

$saya = new Orang;
$saya->nama = 'Mita';
echo $saya->makan();

$saya->nama = 'Adela';
echo $saya->makan();