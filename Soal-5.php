<?php
function hitungParkir($lamaparkir){
	if($lamaparkir>2){
		$sisaparkir=$lamaparkir-2;
		$bea2jam= 2 * 2000;
		$beasisa= $sisaparkir*1000;
		$totalparkir= $bea2jam + $beasisa;
			if($totalparkir>10000){
				$bayarparkir=10000;
				echo 'Biaya :'.$bayarparkir;
			} else{
				$bayarparkir=$totalparkir;
				echo 'Biaya :'.$bayarparkir;
			} 
		} else {
			$bayarparkir= $lamaparkir*2000;
			echo 'Biaya :'.$bayarparkir;
	} 
}
hitungParkir(19);
?>