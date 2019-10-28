<?php 
	class Kendaraan{
		var $merk;
		var $harga;
		var $negara;
		var $warna;
	function  __construct($merk,$harga,$negara,$warna){
			$this->merk=$merk;
			$this->harga=$harga;
			$this->negara=$negara;
			$this->warna=$warna;
		}
		function bacamerk(){
			return $this->merk;	
		}
		function bacaharga(){
			return $this->harga;
		}
		function bacanegara(){
			return $this->negara;
		}
		function bacawarna(){
			return $this->warna;
		}
	}
	$mobil = new Kendaraan("Pajero sepot",39909909000,"Jepangg","merah");
		echo "merk Kendaraan = ".$mobil->bacamerk()."<br>";
		echo "harga Kendaraan = ".$mobil->bacaharga()."<br>";
		echo "negara Kendaraan = ".$mobil->bacanegara()."<br>";
		echo "warna	Kendaraan = ".$mobil->bacawarna()."<br>";
		echo "-------------------------------------------------<br><br>";
	$mobil = new Kendaraan("L300",5000000,"jAPAN","PINK");
		echo "merk Kendaraan = ".$mobil->bacamerk()."<br>";
		echo "harga Kendaraan = ".$mobil->bacaharga()."<br>";
		echo "negara Kendaraan = ".$mobil->bacanegara()."<br>";
		echo "warna	Kendaraan = ".$mobil->bacawarna()."<br>";
		echo "-------------------------------------------------<br><br>";
	$mobil = new Kendaraan("dongfeng",309000000,"Cina","orange");
		echo "merk Kendaraan = ".$mobil->bacamerk()."<br>";
		echo "harga Kendaraan = ".$mobil->bacaharga()."<br>";
		echo "negara Kendaraan = ".$mobil->bacanegara()."<br>";
		echo "warna	Kendaraan = ".$mobil->bacawarna()."<br>";
		echo "-------------------------------------------------<br><br>";
	$mobil = new Kendaraan("BMW",90000000000,"jerman","abu abu");
		echo "merk Kendaraan = ".$mobil->bacamerk()."<br>";
		echo "harga Kendaraan = ".$mobil->bacaharga()."<br>";
		echo "negara Kendaraan = ".$mobil->bacanegara()."<br>";
		echo "warna	Kendaraan = ".$mobil->bacawarna()."<br>";
		echo "-------------------------------------------------<br><br>";
?>