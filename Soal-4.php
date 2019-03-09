<?php 
function hitungKembalian($harga, $bayar){
	$kembalian= ($bayar  - $harga);	
	$kembalian50000 = ($kembalian%50000);
	$limapuluh = ($kembalian-$kembalian50000)/50000; 	
	$kembalian20000 = ($kembalian50000%20000);
	$duapuluh = ($kembalian50000-$kembalian20000)/20000;
	
	$kembalian10000 = ($kembalian20000%10000);
	$sepuluh = ($kembalian20000-$kembalian10000)/10000;
	
	$kembalian5000 = ($kembalian10000%5000);
	$limaribu = ($kembalian10000-$kembalian5000)/5000;
	
	$kembalian2000 = ($kembalian5000%2000);
	$duaribu = ($kembalian5000-$kembalian2000)/2000;
	
	$kembalian1000 = ($kembalian2000%1000);
	$seribu = ($kembalian2000-$kembalian1000)/1000;	
	$kembalian500 = ($kembalian1000%500);
	$limaratus = ($kembalian1000-$kembalian500)/500;
	
	echo "Jumlah Kembalian : ".$kembalian."<br>";
	if($limapuluh>0){
		echo $limapuluh." x 50000 <br>";
	}
	if($duapuluh>0){
		echo $duapuluh." x 20000 <br>";
	}
	if($sepuluh>0){
		echo $sepuluh." x 10000 <br>";
	}
	if($limaribu>0){
		echo $limaribu." x 5000 <br>";
	}
	if($duaribu>0){
		echo $duaribu." x 2000 <br>";
	}
	if($seribu>0){
		echo $seribu." x 1000 <br>";
	}
	if($limaratus>0){
	echo $limaratus." x 500<br>";
	}
}
hitungKembalian(15500, 50000);
?>