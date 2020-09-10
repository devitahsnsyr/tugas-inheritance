<?php
class baso{
	public  $jumlah, $harga,
			$jumlahPenumpang;


	public function tambahlevelpedas(){
		return "kepedasan bertambah";
	}
}
class basolarva extends baso{
	public $pedas = false;

	public function ubahrasa(){
		$this->pedas = true;
		return "rasa baso menjadi sangat pedas";
	}
}

$baso1 = new basolarva();
echo $baso1->tambahlevelpedas();
echo "<br>";
echo $baso1->ubahrasa();