<html>
<head>
  <title>EXPERT SYSTEM FOR PERSONALIA</title>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/monik.css" rel="stylesheet">
<script src='js/jquery.js'></script>
<script src='js/bootstrap.min.js'></script>
</head>
<body>
      <nav class="navbar navbar-inverse">
        <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand" href="#">Expert System</a>
          </div>
          <div>
            <ul class="nav navbar-nav">
              <li class="active"><a href="http://localhost:80/Credit-dss/index.php">Home</a></li>
            </ul>
          </div>
        </div>
      </nav>
<div class="container">
  <form method="post" action="#jawaban">
    <div class="row">
        <div class="col-md-3 tengah">
          ID Kandidat:
        </div>
        <div class="col-md-4">
          <input type="text" name="id_kandidat" class="form-control">
        </div>
    </div>
    <div class="row">
      <div class="col-md-3 tengah">
        Kebiasaan 1:
      </div>
      <div class="col-md-4">
        <select name="kebiasaan_1" class="form-control">
                           <option>Tepat Waktu</option>
                           <option>Terlambat</option>
                         </select>
      </div>
    </div>
    <div class="row">
      <div class="col-md-3 tengah">
      Kebiasaan 2: 
    </div>
    <div class="col-md-4">
      <select name="kebiasaan_2" class="form-control">
                         <option>Teliti</option>
                         <option>Tidak Teliti</option>              
                       </select>
      </div>
    </div>
    <div class="row">
      <div class="col-md-3 tengah">
        Cara berfikir: 
      </div>
      <div class="col-md-4">
        <select name="cara_berfikir" class="form-control">
                       <option>Menepati Janji</option>
                       <option>Wacana</option>
                     </select>
       </div>
     </div>
    <div class="row">
      <div class="col-md-3 tengah">
      	Sifat Pribadi 1: 
      </div>
      <div class="col-md-4">
      <select name="sifat_pribadi_1" class="form-control">
                     <option>Egois</option>
                     <option>Tidak Egois</option>                   
                   </select>
        </div>
     </div>           
    <div class="row">
      <div class="col-md-3 tengah">
      	Sifat Pribadi 2:
      </div>
      <div class="col-md-4">
      <select name="sifat_pribadi_2" class="form-control">
                     <option>Santun</option>
                     <option>Tidak Santun</option>
                  </select>
        </div>
     </div>           
    <div class="row">
      <div class="col-md-3 tengah">
      	Sifat Pribadi 3: 
      </div>
      <div class="col-md-4">
      <select name="sifat_pribadi_3" class="form-control">
                         <option>Pemarah</option>
                         <option>Tidak Pemarah</option>
                      </select>
        </div>
     </div>           
    <div class="row">
      <div class="col-md-3 tengah">
      	Kemampuan Komunikasi: 
      </div>
      <div class="col-md-4">
      <select name="kemampuan_komunikasi" class="form-control">
                           <option>Lancar</option>
                           <option>Sedang</option>
                           <option>Tidak Lancar</option>
                        </select>
          </div>
        </div>           
      <div class="row">
    <div class="col-md-3 tengah">
      Pemecahan Masalah: 
    </div>
    <div class="col-md-4">
      <select name="pemecahan_masalah" class="form-control">
                         <option>Baik</option>
                         <option>Sedang</option>
                         <option>Tidak Baik</option>
                      </select>
          </div>
        </div>           
      <div class="row">
    <div class="col-md-3 tengah">
      Bahasa Inggris: 
      </div>
      <div class="col-md-4">
      <select name="bahasa_inggris" class="form-control">
                             <option>Pemula</option>
                             <option>Madya</option>
                             <option>Mahir</option>
                          </select>
          </div>
        </div>           
      <div class="row">
      <div class="col-md-3 tengah">
      Pendidikan Terakhir: 
      </div>
      <div class="col-md-4">
      <select name="pendidikan_terakhir" class="form-control">
                               <option>SD/SMP/SMA</option>
                               <option>S1/S2</option>
                            </select>
            </div>
        </div>           
      <div class="row">
      <div class="col-md-3 tengah">
      IPK: 
      </div>
      <div class="col-md-4">
      <select name="ipk" class="form-control">
                           <option>Lebih dari 3.5</option>
                           <option>3 sampai 3.5</option>
                           <option>2 sampai 3</option>
                           <option>Kurang dari 2</option>
                           <option>Null</option>
                        </select>
          </div>
        </div>           
      <div class="row">
      <div class="col-md-3 tengah">
      Kesesuaian pengalaman: 
      </div>
      <div class="col-md-4">
      <select name="kesesuaian_pengalaman" class="form-control">
                           <option>Sesuai bidang</option>
                           <option>Tidak sesuai bidang</option>
                        </select>
            </div>
        </div>           
      <div class="row">
      <div class="col-md-3 tengah">
      Lama bekerja sebelumnya: 
      </div>
      <div class="col-md-4">
      <select name="lama_bekerja" class="form-control">
                           <option>Kurang dari 1 tahun</option>
                           <option>1 sampai 3 tahun</option>
                           <option>Lebih dari 3 tahun</option>
                        </select>
              </div>
        </div>           
      <div class="row">
      <div class="col-md-3 tengah">
      Usia: 
      </div>
      <div class="col-md-4">
      <select name="usia" class="form-control">
                           <option>Lebih dari 30 tahun</option>
                           <option>20 sampai 30 tahun</option>
                        </select>
            </div>
        </div>           
      <div class="row">
      <div class="col-md-3 tengah">
      Hasil tes akademis/psikotes: 
      </div>
      <div class="col-md-4">
      <select name="tes_akademis" class="form-control">
                           <option>Lebih dari 80</option>
                           <option>50 sampai 80</option>
                           <option>Kurang dari 50</option>
                        </select>
            </div>
        </div>           
      <div class="row">
      <div class="col-md-3 tengah">
      Hasil tes kesehatan: 
      </div>
      <div class="col-md-4">
      <select name="tes_kesehatan" class="form-control">
                           <option>Baik</option>
                           <option>Tidak baik</option>
                        </select>
            </div>
        </div>           
       
      <div class="row">
        <div class="col-md-12">
          <input type="submit" name="submit" value="SUBMIT" class="btn btn-success">
        </div>
      </div>
  </form>
</div>

<?php

if (! isset($_POST['submit'])) {
  echo '</body></html>';
  return;
}

// Turn off display errors
//ini_set("display_errors", "Off");
ini_set("error_reporting", "E_ALL & ~E_NOTICE");

// Set the include path
$includepath = ini_get("include_path");
ini_set("include_path", $includepath . PATH_SEPARATOR . "classes/phpexpertsystem");

// Let the class files be located correctly
function __autoload($class_name) {
    include $class_name . '.php';
}


include "config.php";
include "util/mysql.php";

db_connect();

//Connect to dss database
$servername = "localhost";
$username = "root";
$password = "";
$dbname ="personalia_dss";

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
  echo "gagal connect db";
}

$ie = new InferenceEngine("acc");

$wm = $ie->getWorkingMemory();
$wm->setFact("kebiasaan_1", $_POST['kebiasaan_1']);
$wm->setFact("kebiasaan_2", $_POST['kebiasaan_2']);
$wm->setFact("cara_berfikir", $_POST['cara_berfikir']);
$wm->setFact("sifat_pribadi_1", $_POST['sifat_pribadi_1']);
$wm->setFact("sifat_pribadi_2", $_POST['sifat_pribadi_2']);
$wm->setFact("sifat_pribadi_3", $_POST['sifat_pribadi_3']);
$wm->setFact("kemampuan_komunikasi", $_POST['kemampuan_komunikasi']);
$wm->setFact("pemecahan_masalah", $_POST['pemecahan_masalah']);
$wm->setFact("bahasa_inggris", $_POST['bahasa_inggris']);
$wm->setFact("pendidikan_terakhir", $_POST['pendidikan_terakhir']);
$wm->setFact("ipk", $_POST['ipk']);
$wm->setFact("kesesuaian_pengalaman", $_POST['kesesuaian_pengalaman']);
$wm->setFact("lama_bekerja", $_POST['lama_bekerja']);
$wm->setFact("usia", $_POST['usia']);
$wm->setFact("tes_akademis", $_POST['tes_akademis']);
$wm->setFact("tes_kesehatan", $_POST['tes_kesehatan']);

echo "<div class='container'>
<h1 id='jawaban'>Reasoning</h1>
<hr>
<button class='btn btn-primary' type='button' data-toggle='collapse' data-target='#facts' aria-expanded='false' aria-controls='facts'>
  Lihat fakta
</button><br><br>
<pre id='facts' class='collapse'>";
print_r($wm);
echo "</pre><hr>";


$ie->run();
$P_karakter = $wm->getFact("P_karakter");
$P_kemampuan = $wm->getFact("P_kemampuan");
$P_pendidikan = $wm->getFact("P_pendidikan");
$P_pengalaman = $wm->getFact("P_pengalaman");
$P_lainlain = $wm->getFact("P_lainlain");

echo "<button class='btn btn-primary' type='button' data-toggle='collapse' data-target='#wm' aria-expanded='false' aria-controls='wm'>
  Lihat Working Memory
</button><br><br>";

echo "<pre id='wm' class='collapse'>";
print_r($wm);
echo "</pre><h1>Hasil</h1><hr>";


if($P_karakter == null){
  $P_karakter =1;
}
if($P_kemampuan == null){
  $P_kemampuan =1;
}
if($P_pendidikan == null){
  $P_pendidikan =1;
}
if($P_pengalaman == null){
  $P_pengalaman =1;
}
if($P_lainlain == null){
  $P_lainlain =1;
}

echo "<table class='table'>";
  echo "<thead>";
    echo "<tr>";
      echo "<th>Poin Karakter</th>";
      echo "<th>Poin Kemampuan</th>";
      echo "<th>Poin Pendidikan</th>";
      echo "<th>Poin Pengalaman</th>";
      echo "<th>Poin Lain-lain</th>";          
    echo "</tr>";
  echo "</thead>";
  echo "<tbody>";

  echo "<tr>";
    echo "<td>$P_karakter</td>";
    echo "<td>$P_kemampuan</td>";
    echo "<td>$P_pendidikan</td>";
    echo "<td>$P_pengalaman</td>";
    echo "<td>$P_lainlain</td>";
  echo "</tr>";
  echo "</tbody>";
  echo "</table>";


//echo $_POST['ID_kandidat'];
$query_1 = "update skor set s_karakter= ".$P_karakter." where id_kandidat =".$_POST['id_kandidat'];
//echo $query_1;
echo "<br>";
if ($conn->query($query_1) !== TRUE) {
    echo "Error updating record: " . $conn->error;
}

$query_2 = "update skor set s_kemampuan = ".$P_kemampuan." where id_kandidat =".$_POST['id_kandidat'];
echo "<br>";
if ($conn->query($query_2) !== TRUE) {
   echo "Error updating record: " . $conn->error;
}

$query_3 = "update skor set s_pendidikan = ".$P_pendidikan." where id_kandidat =".$_POST['id_kandidat'];
echo "<br>";
if ($conn->query($query_3) !== TRUE) {
    echo "Error updating record: " . $conn->error;
} 

$query_4 = "update skor set s_pengalaman = ".$P_pengalaman." where id_kandidat =".$_POST['id_kandidat'];
echo "<br>";
if ($conn->query($query_4) !== TRUE) {
    echo "Error updating record: " . $conn->error;
} 

$query_5 = "update skor set s_lainlain = ".$P_lainlain." where id_kandidat =".$_POST['id_kandidat'];
//echo $query_5;
echo "<br>";
if ($conn->query($query_5) !== TRUE) {
    echo "Error updating record: " . $conn->error;
}

$conn->close();

echo "</div></body></html>";

db_close();