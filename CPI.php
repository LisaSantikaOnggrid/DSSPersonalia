<?php
	$skor_array = array(array());
	for($i = 0; $i <3; $i++){
		$k = $i+1;
		for($j = 0; $j<8; $j++){
			if($j == 0){
				$skor_array[$i][$j] = $_POST["ID_Kandidat_N".$k];
			}
			else if($j == 1){
				$skor_array[$i][$j] = $_POST["Nama_N".$k];
			}
			else if($j == 2){
				$skor_array[$i][$j] = $_POST["Skor_C1_N".$k];
			}
			else if($j == 3){
				$skor_array[$i][$j] = $_POST["Skor_C2_N".$k];
			}
			else if($j == 4){
				$skor_array[$i][$j] = $_POST["Skor_C3_N".$k];
			}
			else if($j == 5){
				$skor_array[$i][$j] = $_POST["Skor_C4_N".$k];
			}
			else if($j == 6){
				$skor_array[$i][$j] = $_POST["Skor_C5_N".$k];
			}
			else if($j == 7){
				$skor_array[$i][$j] = 0;
			}
		}
	}
	/*=====================================================*/

	//Bobot Kriteria
	$bobot_C = array();
	$bobot_C[2] = $_POST["C1"];
	$bobot_C[3] = $_POST["C2"];
	$bobot_C[4] = $_POST["C3"];
	$bobot_C[5] = $_POST["C4"];
	$bobot_C[6] = $_POST["C5"];

	//Minimum Skor per Kriteria
	$min_skor = array(); //$min_skor[1] = minimum skor kolom 1 dst
	//i kolom, j baris
	for($i = 2; $i <7; $i++){
		$min_skor[$i] = $skor_array[1][$i];
		for($j = 0; $j<3; $j++){
			if ($skor_array[$j][$i] < $min_skor[$i]){
				$min_skor[$i] = $skor_array[$j][$i];
			}
		}
	}
	//Hitung akumulai skor CPI
	//$skor_akum = array(); //akumulasi skor per kandidat
	// i kolom, j baris
	for($j = 0; $j<3; $j++){
		$skor_array[$j][7] = 0;
		for($i = 2; $i <7; $i++){
			if($i !=5){
				$skor_array[$j][7] += ($skor_array[$j][$i] / $min_skor[$i]) * 100 * $bobot_C[$i];
			}else{
				$skor_array[$j][7] += ($min_skor[$i] / $skor_array[$j][$i]) * 100 * $bobot_C[$i];
			}
		}

	}

	function cmp($a, $b)
	{
	    if ($a[7] == $b[7]) {
	        return 0;
	    }
	    return ($a[7] < $b[7]) ? 1 : -1;
	}
	usort($skor_array,"cmp");
	// for($i=0;$i<$count_row;$i++){
	// 	for($j=0;$j<8;$j++){
	// 		echo $skor_array[$i][$j];
	// 		echo "    ";
	// 	}
	// 	echo "<br>";
	// }
?>