<?php

//array dynamic karena meranking semua kandidat penerima kredit yang ada di database
	//Penampung hasil eigenvector
	$eigenvector=array();
	$eigenfinal=array();
	$karakterfinal=array();
	$kemampuanfinal=array();
	$pendidikanfinal=array();
	$pengalamanfinal=array();
	$lain-lainfinal=array();
	$perkalianvariabel=array();
	$skor_eigen=array(array());
	$skor_eigen[0][0]=0;

	$eigenfinal[0]=0;
	$karakterfinal[0]=0;
	$kemampuanfinal[0]=0;
	$pendidikanfinal[0]=0;
	$pengalamanfinal[0]=0;
	$lain-lainfinal[0]=0;
	$perkalianvariabel[0]=0;

	//Array skor yang sudah didapat
	$arrayskor = array(array());
	$kuadratisasi = array(array());
	$eigensuperfinal = array();
	$ranking = array(array());
	 
 	for($i = 0; $i <3; $i++){
		$k = $i+1;
		for($j = 0; $j<8; $j++){
			if($j == 0){
				$skor_eigen[$i][$j] = $_POST["ID_Kandidat_N".$k];
			}
			else if($j == 1){
				$skor_eigen[$i][$j] = $_POST["Nama_N".$k];
			}
			else if($j == 2){
				$skor_eigen[$i][$j] = $_POST["Skor_C1_N".$k];
			}
			else if($j == 3){
				$skor_eigen[$i][$j] = $_POST["Skor_C2_N".$k];
			}
			else if($j == 4){
				$skor_eigen[$i][$j] = $_POST["Skor_C3_N".$k];
			}
			else if($j == 5){
				$skor_eigen[$i][$j] = $_POST["Skor_C4_N".$k];
			}
			else if($j == 6){
				$skor_eigen[$i][$j] = $_POST["Skor_C5_N".$k];
			}
			else if($j == 7){
				$skor_eigen[$i][$j] = 0;
			}
		}
	}

 	if($_POST["optradio"]=="Karakter")
	{
		//KARAKTER
		$arrayskor[0][0]=1;
		$arrayskor[0][1]=1/3;
		$arrayskor[0][2]=2/5;
		$arrayskor[0][3]=3/1;
		$arrayskor[0][4]=2/1;

		//KEMAMPUAN
		$arrayskor[1][0]=3/1;
		$arrayskor[1][1]=1;
		$arrayskor[1][2]=2;
		$arrayskor[1][3]=1/5;
		$arrayskor[1][4]=1/6;

		//CAPITAL
		$arrayskor[2][0]=5/2;
		$arrayskor[2][1]=1/2;
		$arrayskor[2][2]=1;
		$arrayskor[2][3]=1;
		$arrayskor[2][4]=2/5;

		//PENGALAMAn
		$arrayskor[3][0]=1/3;
		$arrayskor[3][1]=5;
		$arrayskor[3][2]=1;
		$arrayskor[3][3]=1;
		$arrayskor[3][4]=3;

		//LAIN-LAIN
		$arrayskor[4][0]=1/2;
		$arrayskor[4][1]=6;
		$arrayskor[4][2]=5/2;
		$arrayskor[4][3]=1/3;
		$arrayskor[4][4]=1;
	}
	else if ($_POST['optradio']=="Lain-lain") 
	{
		//KARAKTER
		$arrayskor[0][0]=0.67;
		$arrayskor[0][1]=0.67;
		$arrayskor[0][2]=1.50;
		$arrayskor[0][3]=0.50;
		$arrayskor[0][4]=1;

		//KEMAMPUAN
		$arrayskor[1][0]=1.00;
		$arrayskor[1][1]=1.00;
		$arrayskor[1][2]=1.50;
		$arrayskor[1][3]=0.50;
		$arrayskor[1][4]=1.50;

		//CAPITAL
		$arrayskor[2][0]=1;
		$arrayskor[2][1]=1;
		$arrayskor[2][2]=0.5;
		$arrayskor[2][3]=0.5;
		$arrayskor[2][4]=1.5;

		//PENGALAMAn
		$arrayskor[3][0]=0.67;
		$arrayskor[3][1]=2;
		$arrayskor[3][2]=1;
		$arrayskor[3][3]=0.33;
		$arrayskor[3][4]=0.67;

		//LAIN-LAIN
		$arrayskor[4][0]=2;
		$arrayskor[4][1]=2;
		$arrayskor[4][2]=3;
		$arrayskor[4][3]=1;
		$arrayskor[4][4]=2;
	}

	else 
	{
		//print_r($_POST);
		//KARAKTER
		$arrayskor[0][0]=1;
		$arrayskor[0][1]=$_POST['KarakterKemampuan'];
		$arrayskor[0][2]=$_POST['KarakterCapital'];
		$arrayskor[0][3]=$_POST['KarakterPengalaman'];
		$arrayskor[0][4]=$_POST['KarakterLain-lain'];

		//KEMAMPUAN
		$arrayskor[1][0]=$_POST['KemampuanKarakter'];
		$arrayskor[1][1]=1.00;
		$arrayskor[1][2]=$_POST['KemampuanCapital'];
		$arrayskor[1][3]=$_POST['KemampuanPengalaman'];
		$arrayskor[1][4]=$_POST['KemampuanLain-lain'];

		//CAPITAL
		$arrayskor[2][0]=$_POST['CapitalKarakter'];
		$arrayskor[2][1]=$_POST['CapitalKemampuan'];
		$arrayskor[2][2]=1;
		$arrayskor[2][3]=$_POST['CapitalPengalaman'];
		$arrayskor[2][4]=$_POST['CapitalLain-lain'];

		//PENGALAMAn
		$arrayskor[3][0]=$_POST['PengalamanKarakter'];
		$arrayskor[3][1]=$_POST['PengalamanKemampuan'];
		$arrayskor[3][2]=$_POST['PengalamanCapital'];
		$arrayskor[3][3]=1;
		$arrayskor[3][4]=$_POST['PengalamanLain-lain'];

		//LAIN-LAIN
		$arrayskor[4][0]=$_POST['Lain-lainKarakter'];
		$arrayskor[4][1]=$_POST['Lain-lainKemampuan'];
		$arrayskor[4][2]=$_POST['Lain-lainCapital'];
		$arrayskor[4][3]=$_POST['Lain-lainPengalaman'];
		$arrayskor[4][4]=1;
	}

	//Hitung eigenvector
	$bariseigen=4;
	$kolomeigen=4;
	$baris=2;
	$kolom=2;
	$totalbaris = 0;
	$perkalian = 0;
	$totalkali = 0;
	//iterasi
	//i,j,k
	for($i=0;$i<=$bariseigen;$i++){
		for($k=0;$k<=$kolomeigen;$k++){
			$totalkali=0;

			for($j=0;$j<=$kolomeigen;$j++){
				$perkalian= $arrayskor[$i][$j]*$arrayskor[$j][$k];
				$totalkali= $totalkali+$perkalian;
				$kuadratisasi[$i][$k]=$totalkali;
			}	
		}
	}
	for($i=0;$i<=$bariseigen;$i++)
	{
		$eigenvector[$i]= 0;
		for($j=0;$j<=$kolomeigen;$j++)
		{
			$eigenvector[$i]=$eigenvector[$i]+$kuadratisasi[$i][$j];

		}
	}


	$jumlah=0;
	$jumlah = $eigenvector[0]+$eigenvector[1]+$eigenvector[2]+$eigenvector[3]+$eigenvector[4];

	for($i=0;$i<=$bariseigen;$i++)
	{
			$eigenvector[$i]=$eigenvector[$i]/$jumlah;
	}

	for($i=0;$i<=$bariseigen;$i++)
	{
			$eigenvector[$i]=$eigenvector[$i]/$jumlah;
			$eigenfinal[$i]=$eigenvector[$i];
	}


	//SkorKarakter
	//Kandidat1
		$arrayskor[0][0]=1;
		$arrayskor[0][1]=$skor_eigen[0][2]/$skor_eigen[1][2];
		$arrayskor[0][2]=$skor_eigen[0][2]/$skor_eigen[2][2];
		
		//Kandidat2
		$arrayskor[1][0]=$skor_eigen[1][2]/$skor_eigen[0][2];
		$arrayskor[1][1]=1;
		$arrayskor[1][2]=$skor_eigen[1][2]/$skor_eigen[2][2];

		//Kandidat3
		$arrayskor[2][0]=$skor_eigen[2][2]/$skor_eigen[0][2];
		$arrayskor[2][1]=$skor_eigen[2][2]/$skor_eigen[1][2];
		$arrayskor[2][2]=1;

				//Hitung eigenvector
		$totalbaris = 0;
		$perkalian = 0;
		$totalkali = 0;
		//iterasi
		//i,j,k
		for($i=0;$i<=$baris;$i++){
			for($k=0;$k<=$kolom;$k++){
				$totalkali=0;
				for($j=0;$j<=$kolom;$j++){
					$perkalian= $arrayskor[$i][$j]*$arrayskor[$j][$k];
					$totalkali= $totalkali+$perkalian;
					$kuadratisasi[$i][$k]=$totalkali;
				}	
			}
		}
		for($i=0;$i<=$baris;$i++)
		{
			$eigenvector[$i]= 0;
			for($j=0;$j<=$kolom;$j++)
			{
				$eigenvector[$i]=$eigenvector[$i]+$kuadratisasi[$i][$j];
			}
		}


		$jumlah=0;
		$jumlah = $eigenvector[0]+$eigenvector[1]+$eigenvector[2];

		for($i=0;$i<=$baris;$i++)
		{
				$eigenvector[$i]=$eigenvector[$i]/$jumlah;
		}

		for($i=0;$i<=$baris;$i++)
		{
				$eigenvector[$i]=$eigenvector[$i]/$jumlah;
				$karakterfinal[$i]=$eigenvector[$i];
		}


		//SkorKemampuan
	//Kandidat1
		$arrayskor[0][0]=1;
		$arrayskor[0][1]=$skor_eigen[0][3]/$skor_eigen[1][3];
		$arrayskor[0][2]=$skor_eigen[0][3]/$skor_eigen[2][3];

		//Kandidat2
		$arrayskor[1][0]=$skor_eigen[1][3]/$skor_eigen[0][3];
		$arrayskor[1][1]=1;
		$arrayskor[1][2]=$skor_eigen[1][3]/$skor_eigen[2][3];

		//Kandidat3
		$arrayskor[2][0]=$skor_eigen[2][3]/$skor_eigen[0][3];
		$arrayskor[2][1]=$skor_eigen[2][3]/$skor_eigen[1][3];
		$arrayskor[2][2]=1;


				//Hitung eigenvector
		$totalbaris = 0;
		$perkalian = 0;
		$totalkali = 0;
		//iterasi
		//i,j,k
		for($i=0;$i<=$baris;$i++){
			for($k=0;$k<=$kolom;$k++){
				$totalkali=0;
				// echo $totalbaris;
				// echo "<br>";
				for($j=0;$j<=$kolom;$j++){
					$perkalian= $arrayskor[$i][$j]*$arrayskor[$j][$k];
					$totalkali= $totalkali+$perkalian;
					$kuadratisasi[$i][$k]=$totalkali;
				}	
			}
		}
		for($i=0;$i<=$baris;$i++)
		{
			$eigenvector[$i]= 0;
			for($j=0;$j<=$kolom;$j++)
			{
				$eigenvector[$i]=$eigenvector[$i]+$kuadratisasi[$i][$j];
			}
		}


		$jumlah=0;
		$jumlah = $eigenvector[0]+$eigenvector[1]+$eigenvector[2];

		for($i=0;$i<=$baris;$i++)
		{
				$eigenvector[$i]=$eigenvector[$i]/$jumlah;
		}

		for($i=0;$i<=$baris;$i++)
		{
				$eigenvector[$i]=$eigenvector[$i]/$jumlah;
				$kemampuanfinal[$i]=$eigenvector[$i];
		}




		//SkorPendidikan
	//Kandidat1
		$arrayskor[0][0]=1;
		$arrayskor[0][1]=$skor_eigen[0][3]/$skor_eigen[1][3];
		$arrayskor[0][2]=$skor_eigen[0][3]/$skor_eigen[2][3];

		//Kandidat2
		$arrayskor[1][0]=$skor_eigen[1][3]/$skor_eigen[0][3];
		$arrayskor[1][1]=1;
		$arrayskor[1][2]=$skor_eigen[1][3]/$skor_eigen[2][3];

		//Kandidat3
		$arrayskor[2][0]=$skor_eigen[2][3]/$skor_eigen[0][3];
		$arrayskor[2][1]=$skor_eigen[2][3]/$skor_eigen[1][3];
		$arrayskor[2][2]=1;


				//Hitung eigenvector
		$totalbaris = 0;
		$perkalian = 0;
		$totalkali = 0;
		//iterasi
		//i,j,k
		for($i=0;$i<=$baris;$i++){
			for($k=0;$k<=$kolom;$k++){
				$totalkali=0;
				// echo $totalbaris;
				// echo "<br>";
				for($j=0;$j<=$kolom;$j++){
					$perkalian= $arrayskor[$i][$j]*$arrayskor[$j][$k];
					$totalkali= $totalkali+$perkalian;
					$kuadratisasi[$i][$k]=$totalkali;
				}	
			}
		}
		for($i=0;$i<=$baris;$i++)
		{
			$eigenvector[$i]= 0;
			for($j=0;$j<=$kolom;$j++)
			{
				$eigenvector[$i]=$eigenvector[$i]+$kuadratisasi[$i][$j];
			}
		}


		$jumlah=0;
		$jumlah = $eigenvector[0]+$eigenvector[1]+$eigenvector[2];

		for($i=0;$i<=$baris;$i++)
		{
				$eigenvector[$i]=$eigenvector[$i]/$jumlah;
		}

		for($i=0;$i<=$baris;$i++)
		{
				$eigenvector[$i]=$eigenvector[$i]/$jumlah;
				$capitalfinal[$i]=$eigenvector[$i];
		}


		//SkorPENGALAMAN
	//Kandidat1
		$arrayskor[0][0]=1;
		$arrayskor[0][1]=$skor_eigen[0][4]/$skor_eigen[1][4];
		$arrayskor[0][2]=$skor_eigen[0][4]/$skor_eigen[2][4];

		//Kandidat2
		$arrayskor[1][0]=$skor_eigen[1][4]/$skor_eigen[0][4];
		$arrayskor[1][1]=1;
		$arrayskor[1][2]=$skor_eigen[1][4]/$skor_eigen[2][4];

		//Kandidat3
		$arrayskor[2][0]=$skor_eigen[2][4]/$skor_eigen[0][4];
		$arrayskor[2][1]=$skor_eigen[2][4]/$skor_eigen[1][4];
		$arrayskor[2][2]=1;

				//Hitung eigenvector
		$totalbaris = 0;
		$perkalian = 0;
		$totalkali = 0;
		//iterasi
		//i,j,k
		for($i=0;$i<=$baris;$i++){
			for($k=0;$k<=$kolom;$k++){
				$totalkali=0;
				// echo $totalbaris;
				// echo "<br>";
				for($j=0;$j<=$kolom;$j++){
					$perkalian= $arrayskor[$i][$j]*$arrayskor[$j][$k];
					$totalkali= $totalkali+$perkalian;
					$kuadratisasi[$i][$k]=$totalkali;
				}	
			}
		}
		for($i=0;$i<=$baris;$i++)
		{
			$eigenvector[$i]= 0;
			for($j=0;$j<=$kolom;$j++)
			{
				$eigenvector[$i]=$eigenvector[$i]+$kuadratisasi[$i][$j];
			}
		}


		$jumlah=0;
		$jumlah = $eigenvector[0]+$eigenvector[1]+$eigenvector[2];

		for($i=0;$i<=$baris;$i++)
		{
				$eigenvector[$i]=$eigenvector[$i]/$jumlah;
		}

		for($i=0;$i<=$baris;$i++)
		{
				$eigenvector[$i]=$eigenvector[$i]/$jumlah;
				$pengalamanfinal[$i]=$eigenvector[$i];
		}



		//SkorLain-lain
	//Kandidat1
		$arrayskor[0][0]=1;
		$arrayskor[0][1]=$skor_eigen[0][5]/$skor_eigen[1][5];
		$arrayskor[0][2]=$skor_eigen[0][5]/$skor_eigen[2][5];

		//Kandidat2
		$arrayskor[1][0]=$skor_eigen[1][5]/$skor_eigen[0][5];
		$arrayskor[1][1]=1;
		$arrayskor[1][2]=$skor_eigen[1][5]/$skor_eigen[2][5];

		//Kandidat3
		$arrayskor[2][0]=$skor_eigen[2][5]/$skor_eigen[0][5];
		$arrayskor[2][1]=$skor_eigen[2][5]/$skor_eigen[1][5];
		$arrayskor[2][2]=1;


				//Hitung eigenvector
		$totalbaris = 0;
		$perkalian = 0;
		$totalkali = 0;
		//iterasi
		//i,j,k
		for($i=0;$i<=$baris;$i++){
			for($k=0;$k<=$kolom;$k++){
				$totalkali=0;
				// echo $totalbaris;
				// echo "<br>";
				for($j=0;$j<=$kolom;$j++){
					$perkalian= $arrayskor[$i][$j]*$arrayskor[$j][$k];
					$totalkali= $totalkali+$perkalian;
					$kuadratisasi[$i][$k]=$totalkali;
				}	
			}
		}
		for($i=0;$i<=$baris;$i++)
		{
			$eigenvector[$i]= 0;
			for($j=0;$j<=$kolom;$j++)
			{
				$eigenvector[$i]=$eigenvector[$i]+$kuadratisasi[$i][$j];
			}
		}


		$jumlah=0;
		$jumlah = $eigenvector[0]+$eigenvector[1]+$eigenvector[2];

		for($i=0;$i<=$baris;$i++)
		{
				$eigenvector[$i]=$eigenvector[$i]/$jumlah;
		}

		for($i=0;$i<=$baris;$i++)
		{
				$eigenvector[$i]=$eigenvector[$i]/$jumlah;
				$lain-lainfinal[$i]=$eigenvector[$i];
		}

		//PERKALIAN EIGENVECTOR DENGAN SEMUA VARIABEL

		$arraygabungan=array(array());
		for($i=0;$i<=$baris;$i++)
		{
			$arraygabungan[$i][0]=$karakterfinal[$i];
		}
		for($i=0;$i<=$baris;$i++)
		{
			$arraygabungan[$i][1]=$kemampuanfinal[$i];
		}
		for($i=0;$i<=$baris;$i++)
		{
			$arraygabungan[$i][2]=$capitalfinal[$i];
		}
		for($i=0;$i<=$baris;$i++)
		{
			$arraygabungan[$i][3]=$pengalamanfinal[$i];
		}
		for($i=0;$i<=$baris;$i++)
		{
			$arraygabungan[$i][4]=$lain-lainfinal[$i];
		}
		$eigensuperfinal[0]=0;
		$eigensuperfinal[1]=0;
		$eigensuperfinal[2]=0;

		for($i=0;$i<=$baris;$i++)
		{
			for($j=0;$j<=4;$j++)
			{
				$eigensuperfinal[$i]=$eigensuperfinal[$i]+$arraygabungan[$i][$j]*$eigenfinal[$j];
			}
		}

		for($i=0;$i<=$baris;$i++)
		{
			$ranking[$i][2]=$eigensuperfinal[$i];
		}

		$ranking[0][0]=$skor_eigen[0][0];
		$ranking[0][1]=$skor_eigen[0][1];
		$ranking[1][0]=$skor_eigen[1][0];
		$ranking[1][1]=$skor_eigen[1][1];
		$ranking[2][0]=$skor_eigen[2][0];
		$ranking[2][1]=$skor_eigen[2][1];

		function tukar($a, $b)
	{
	    if ($a[2] == $b[2]) {
	        return 0;
	    }
	    return ($a[2] < $b[2]) ? 1 : -1;
	}
	usort($ranking,"tukar");


?>