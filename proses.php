<?php 
//Tuliskan kode anda di bawah ini
	function bintang($value){

		samping($value);
		echo "<br>";
		$value--;
		if ($value >= 1) {
			bintang($value);
		}
		function samping($batas, $awal=1); 
		echo "*";
		$awal++;
		if ($awal <=batas) 
			samping($batas,$awal);
		}
		

	function bilangan ($value){
		$ganjil = array();
		$genap = array();
		for( $i = 1,$i < $nilai $i ++) { 
			if($bil%2==0){
				array_push  ($ganjil, $i);
			}else {
				array_push ($genap, $i);
			}
		
		echo "ganjil :";
	}
}
	if (isset($_GET ['submit'])) {
			$angka = isset ($_GET['angka']) ? $_GET['angka'] : 0;
			bintang($angka);
		}
	
?>
