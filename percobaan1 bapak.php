<?php
class Bapak {
		Var $nama="Bapak";
		function Bapak($n){
			$this->nama = $n;
		}
		function Hallo() {
			echo "===========singel interation=========="."<br>";
			echo "heeloow anita dari ".$this->nama."<br>";
			echo "heeloow afredow dari anak kedua dari ".$this->nama."<br>";
		}
	}
	class Anak extends bapak {
	}
	$test=new anak("Anak dari Bapak");
	$test->hallo();
?>