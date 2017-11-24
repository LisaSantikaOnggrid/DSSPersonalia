<link href="css/bootstrap.min.css" rel="stylesheet">
<script src="js/jquery.js"></script>

<?php
	//Connect to Database
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname ="dss_credit";

	$conn = new mysqli($servername, $username, $password, $dbname);

	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} 
	$sql = "select n.ID_Kandidat from kandidat n, skor_kriteria s where n.ID_Kandidat = s.ID_Kandidat";
	$result = $conn->query($sql);
	$tupple;
	$i = 0;
	while($a = $result->fetch_assoc()){
        $tupple[$i] = $a;
        $i++;
    }

    echo "<nav class='navbar navbar-inverse'>";
      	echo '<div class="container-fluid">';
        echo '<div class="navbar-header">';
          	echo '<a class="navbar-brand" href="#">Pemilihan Kandidat</a>';
        echo '</div>';
        echo '<div>
            <ul class="nav navbar-nav">
              <li class="active"><a href="http://localhost:8080/Credit-dss/index.php">Home</a></li>
            </ul>
          </div>';
        echo '</div>';
    echo '</nav>';

	echo "<div class='container' align='center'>";
      	echo "<h2>Data Kandidat</h2>";
      	echo "<p>Pilih tiga kandidat yang akan diurutkan di dalam DSS</p>";
        
        echo "<form action='expert.php' method='post'>";
        echo "<div class='row'>";
  		echo "<div class='col-md-2 col-md-offset-3 tengah'>";
    	echo "Kandidat 1:";
  		echo "</div>";
  		echo "<div class='col-md-4'>";
    		echo "<select name='Kandidat[]' class='form-control pilihkandidat'>";
    		foreach($tupple as $key){
    			echo '<option value="'.$key['ID_Kandidat'].'">'.$key['ID_Kandidat'].'</option>';
    		}
        echo '</select>';
  		echo "</div>";
		echo "</div>";

		echo "<div class='row'>";
  		echo "<div class='col-md-2 col-md-offset-3 tengah'>";
    	echo "Kandidat 2:";
  		echo "</div>";
  		echo "<div class='col-md-4'>";
    		echo "<select name='Kandidat[]' class='form-control pilihkandidat'>";
    		foreach($tupple as $key){
    			echo '<option value="'.$key['ID_Kandidat'].'">'.$key['ID_Kandidat'].'</option>';
    		}
        echo '</select>';
  		echo "</div>";
		echo "</div>";

		echo "<div class='row'>";
  		echo "<div class='col-md-2 col-md-offset-3 tengah'>";
    	echo "Kandidat 3:";
  		echo "</div>";
  		echo "<div class='col-md-4'>";
    		echo "<select name='Kandidat[]' class='form-control pilihkandidat'>";
    		foreach($tupple as $key){
    			echo '<option value="'.$key['ID_Kandidat'].'">'.$key['ID_Kandidat'].'</option>';
    		}
        echo '</select>';
  		echo "</div>";
		echo "</div>";

    	echo "<div class='row'>";
        echo "<div class='col-md-12'>";
        echo "<br><input type='submit' name='submit' value='Pilih kandidat' class='btn btn-success'>";
 	    echo '  </div>
      </div>
  </form>';

  ?>
  <script>
  	$(".pilihkandidat").change(function(){
  		pil1 = $(".pilihkandidat:first option:selected").attr("value");
  		pil2 = $(".pilihkandidat:nth-child(1) option:selected").attr("value");
  		pil3 = $(".pilihkandidat:last option:selected").attr("value");

  		if(pil1 == pil2 || pil2 == pil3 || pil1 == pil3){
  			alert("Pastikan pilihan 1, 2, dan 3 tidak ada yang sama");
  		}
  	});
  </script>