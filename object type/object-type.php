<?php

//muncul alat musik apa aja
//gitar
//piano

class Musik{
	public $merk = "merk";
	public $warna = "warna";

	public function __construct( $merk, $warna ){
			$this->merk = $merk;
			$this->warna = $warna;
	}

	public function getLabel(){
		return "$this->merk, $this->warna";
	}
}  

class CetakInfoMusik{
	public function cetak( Musik $musik ){
		$str = "{$musik->getLabel()}"; 
		return $str;
	}
}

$musik1 = new Musik("yamaha", "coklat");
$musik2 = new Musik("roland", "hitam");


echo "Gitar : " . $musik1->getLabel();
echo "<br>";
echo "Piano : " . $musik2->getLabel();
echo "<br>";
$infoMusik1 = new CetakInfoMusik();
echo $infoMusik1->cetak($musik1);
?>
