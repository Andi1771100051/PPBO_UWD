<?php
	class mobil{
			private $merk;
			private $harga;
			private $warna;
			private $tipe;
	function __construct($merk,$harga,$warna,$tipe){
			$this->merk=$merk;
				$this->harga=$harga;
					$this->warna=$warna;
						$this->tipe=$tipe;
	}
	function BacaMerk(){
		return $this->merk;
	}
			function BacaHarga(){
				return $this->harga;
			}
					function BacaWarna(){
						return $this->warna;
					}
							function BacaTipe(){
								return $this->tipe;
					}
				//function __destruct(){
			//echo "Merk, harga, warna dan type wis terhapus";
		//}
	}
								$mobil = new mobil("L TIGA RATUS", 450000000000, "PINK", "K0P3T ");
										echo " Merk mobil = ".$mobil->BacaMerk()."<br>";
										echo " Harga mobil = ".$mobil->BacaHarga()."<br>";
										echo " Merk mobil = ".$mobil->BacaWarna()."<br>";
										echo " Harga mobil = ".$mobil->BacaTipe()."<br>";
?>