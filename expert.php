<!-- Bootstrap -->
	<php session_start();?>
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	</head>
		<body>

		 <nav class="navbar navbar-inverse">
	      <div class="container-fluid">
	        <div class="navbar-header">
	          <a class="navbar-brand" href="#">DSS Sistem Personalia</a>
	        </div>
	        <div>
	          <ul class="nav navbar-nav">
	           <li class="active"><a href="index.php">Home</a></li>
	          </ul>
	        </div>
	      </div>
	    </nav>
<?php
	$array_kandidat = array(array());
	$ID_Kandidat = array();
	$ID_Kandidat[0] = $_POST["Kandidat"][0];
	$ID_Kandidat[1] = $_POST["Kandidat"][1];
	$ID_Kandidat[2] = $_POST["Kandidat"][2];
	$count_row = 1;
	//HEADER ARRAY
	//$array_kandidat[baris][kolom]
	$array_kandidat[0][0] = "ID Kandidat";
	$array_kandidat[0][1] = "Nama";
	$array_kandidat[0][2] = "Karakter";
	$array_kandidat[0][3] = "Kemampuan";
	$array_kandidat[0][4] = "Pendidikan";
	$array_kandidat[0][5] = "Pengalaman";
	$array_kandidat[0][6] = "Lain-lain";
	$array_kandidat[0][7] = "Akumulasi";

	/*=====================================================*/
	//Connect to Database
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname ="dss_credit";

	$conn = new mysqli($servername, $username, $password, $dbname);

	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	
	for($i = 0; $i <3; $i++){
		$sql = "select n.ID_Kandidat, n.Nama, s.Skor_Karakter, s.Skor_Kemampuan, s.Skor_Pendidikan, s.Skor_Pengalaman, s.Skor_Lain-lain, s.Skor_Akum from kandidat n, skor_kriteria s where n.ID_Kandidat=".$ID_Kandidat[$i]." and s.ID_Kandidat=".$ID_Kandidat[$i];
		$result = $conn->query($sql);

		if($result->num_rows > 0){
			while($row = $result->fetch_assoc()){
				for($j = 0; $j<8; $j++){
					if($j == 0){
						$array_kandidat[$count_row][$j] = $row["ID_Kandidat"];
					}
					else if($j == 1){
						$array_kandidat[$count_row][$j] = $row["Nama"];
					}
					else if($j == 2){
						$array_kandidat[$count_row][$j] = $row["Skor_Karakter"];
					}
					else if($j == 3){
						$array_kandidat[$count_row][$j] = $row["Skor_Kemampuan"];
					}
					else if($j == 4){
						$array_kandidat[$count_row][$j] = $row["Skor_Pendidikan"];
					}
					else if($j == 5){
						$array_kandidat[$count_row][$j] = $row["Skor_Pengalaman"];
					}
					else if($j == 6){
						$array_kandidat[$count_row][$j] = $row["Skor_Lain-lain"];
					}
					else if($j == 7){
						$array_kandidat[$count_row][$j] = $row["Skor_Akum"];
					}
				}
				$count_row++;
			}
		} else{
			echo "0 result";
		}
	} 
?>

			<form action="dss.php" method="post">
			<div class="container" align="center">
			<h2>Expert system result based on answers</h2>
				<table class="table">
		          <thead>
		            <tr>
		            	<th><?php echo $array_kandidat[0][0];?></th>
		            	<th><?php echo $array_kandidat[0][1];?></th>
		            	<th><?php echo $array_kandidat[0][2];?></th>
		            	<th><?php echo $array_kandidat[0][3];?></th>
		            	<th><?php echo $array_kandidat[0][4];?></th>
		            	<th><?php echo $array_kandidat[0][5];?></th>
		            	<th><?php echo $array_kandidat[0][6];?></th>
		            </tr>
		          </thead>

		          <tbody>
		          	<tr>
		          		<td><?php echo $array_kandidat[1][0];?><input type="hidden" name="ID_Kandidat_N1" value=<?php echo $array_kandidat[1][0];?>></td>
		          		<td><?php echo $array_kandidat[1][1];?><input type="hidden" name="Nama_N1" value=<?php echo $array_kandidat[1][1];?>></td>
		          		<td><?php echo $array_kandidat[1][2];?><input type="hidden" name="Skor_C1_N1" value=<?php echo $array_kandidat[1][2];?>></td>
		          		<td><?php echo $array_kandidat[1][3];?><input type="hidden" name="Skor_C2_N1" value=<?php echo $array_kandidat[1][3];?>></td>
		          		<td><?php echo $array_kandidat[1][4];?><input type="hidden" name="Skor_C3_N1" value=<?php echo $array_kandidat[1][4];?>></td>
		          		<td><?php echo $array_kandidat[1][5];?><input type="hidden" name="Skor_C4_N1" value=<?php echo $array_kandidat[1][5];?>></td>
		          		<td><?php echo $array_kandidat[1][6];?><input type="hidden" name="Skor_C5_N1" value=<?php echo $array_kandidat[1][6];?>></td>
		          	</tr>
		          	<tr>
		          		<td><?php echo $array_kandidat[2][0];?><input type="hidden" name="ID_Kandidat_N2" value=<?php echo $array_kandidat[2][0];?>></td>
		          		<td><?php echo $array_kandidat[2][1];?><input type="hidden" name="Nama_N2" value=<?php echo $array_kandidat[2][1];?>></td>
		          		<td><?php echo $array_kandidat[2][2];?><input type="hidden" name="Skor_C1_N2" value=<?php echo $array_kandidat[2][2];?>></td>
		          		<td><?php echo $array_kandidat[2][3];?><input type="hidden" name="Skor_C2_N2" value=<?php echo $array_kandidat[2][3];?>></td>
		          		<td><?php echo $array_kandidat[2][4];?><input type="hidden" name="Skor_C3_N2" value=<?php echo $array_kandidat[2][4];?>></td>
		          		<td><?php echo $array_kandidat[2][5];?><input type="hidden" name="Skor_C4_N2" value=<?php echo $array_kandidat[2][5];?>></td>
		          		<td><?php echo $array_kandidat[2][6];?><input type="hidden" name="Skor_C5_N2" value=<?php echo $array_kandidat[2][6];?>></td>
		          	</tr>
		          	<tr>
		          		<td><?php echo $array_kandidat[3][0];?><input type="hidden" name="ID_Kandidat_N3" value=<?php echo $array_kandidat[3][0];?>></td>
		          		<td><?php echo $array_kandidat[3][1];?><input type="hidden" name="Nama_N3" value=<?php echo $array_kandidat[3][1];?>></td>
		          		<td><?php echo $array_kandidat[3][2];?><input type="hidden" name="Skor_C1_N3" value=<?php echo $array_kandidat[3][2];?>></td>
		          		<td><?php echo $array_kandidat[3][3];?><input type="hidden" name="Skor_C2_N3" value=<?php echo $array_kandidat[3][3];?>></td>
		          		<td><?php echo $array_kandidat[3][4];?><input type="hidden" name="Skor_C3_N3" value=<?php echo $array_kandidat[3][4];?>></td>
		          		<td><?php echo $array_kandidat[3][5];?><input type="hidden" name="Skor_C4_N3" value=<?php echo $array_kandidat[3][5];?>></td>
		          		<td><?php echo $array_kandidat[3][6];?><input type="hidden" name="Skor_C5_N3" value=<?php echo $array_kandidat[3][6];?>></td>
		          	</tr>
		          </tbody>
		        </table>

		          	<div class="row col-md-6">
					  <h2>Choose AHP Priority</h2>
					  <p>AHP factor priority</p>
					    <div class="radio">
					      <label><input type="radio" name="optradio" value="Karakter">Karakter</label>
					      <label><input type="radio" name="optradio" value="Lain-lain">Lain-lain</label>
					      <label><input type="radio" name="optradio" value="Custom">Custom (isi tabel di bawah)</label>
					    </div>
					</div>
					<div class="row col-md-6">
						<h2>Fill CPI Weight</h2>
						<p>This is default weight, please update to customize</p>
							Karakter Weight: 
							<input type="text"  name="C1" value="0.188" class="form-control">
	  						<br>
	  						Kemampuan Weight:
	  						<input type="text" name="C2" value="0.1572" class="form-control">
	  						<br>
	  						Pendidikan Weight:
	  						<input type="text" name="C3" value="0.1554" class="form-control">
	  						<br>
	  						Pengalaman Weight:
	  						<input type="text" name="C4" value="0.3474" class="form-control">
	  						<br>
	  						Lain-lain Weight:
	  						<input type="text" name="C5" value="0.152" class="form-control">
	  						<br> 
					</div>
					
					    <div class="container" align="center">
					    <h2>Customize the model</h2>
						<p>Isilah form di bawah ini jika memilih variasi custom di atas</p>
								<table class="table">

						          <thead>
							          <th> </th>
							          <th>Karakter</th>
							          <th>Kemampuan</th>
							          <th>Pendidikan</th>
							          <th>Pengalaman</th>
							          <th>Lain-lain</th>
						          </thead>

							          <tbody>

								          <tr>
								          </tr>

								          <tr>
								          <td><b>Karakter</b></td>
								          <td>1</td>
								          <td><input type="float" value="0.08" name="KarakterKemampuan"></td>
								          <td><input type="float" value="0.15" name="KarakterPendidikan"></td>
								          <td><input type="float" value="0.14" name="KarakterPengalaman"></td>
								          <td><input type="float" value="0.10" name="KarakterLain-lain"></td>
								          </tr>

								          <tr>
								          <td><b>Kemampuan</b></td>
								          <td><input type="float" value="0.28" name="KemampuanKarakter"></td>
								          <td>1</td>
								          <td><input type="float" value="0.29" name="KemampuanPendidikan"></td>
								          <td><input type="float" value="0.23" name="KemampuanPengalaman"></td>
								          <td><input type="float" value="0.16" name="KemampuanLain-lain"></td>
								          </tr>

								          <tr>
								          <td><b>Pendidikan</b></td>
								          <td><input type="float" value="0.19" name="PendidikanKarakter"></td>
								          <td><input type="float" value="0.11" name="PendidikanKemampuan"></td>
								          <td>1</td>
								          <td><input type="float" value="0.23" name="PendidikanPengalaman"></td>
								          <td><input type="float" value="0.16" name="PendidikanLain-lain"></td>
								          </tr>

								          <tr>
								          <td><b>Pengalaman</b></td>
								          <td><input type="float" value="0.03" name="PengalamanKarakter"></td>
								          <td><input type="float" value="0.05" name="PengalamanKemampuan"></td>
								          <td><input type="float" value="0.04" name="PengalamanPendidikan"></td>
								          <td>1</td>
								          <td><input type="float" value="0.07" name="PengalamanLain-lain"></td>
								          </tr>

								          <tr>
								          <td><b>Lain-lain</b></td>
								          <td><input type="float" value="0.47" name="Lain-lainKarakter"></td>
								          <td><input type="float" value="0.48" name="Lain-lainKemampuan"></td>
								          <td><input type="float" value="0.59" name="Lain-lainPendidikan"></td>
								          <td><input type="float" value="0.32" name="Lain-lainPengalaman"></td>
								          <td>1</td>
								          </tr>

							          </tbody>
							          </table>

							          </div>
							    <input align="center" type="submit" value="Submit" class="btn btn-default">
			</div>	
			</form>
   		</body>
</html>