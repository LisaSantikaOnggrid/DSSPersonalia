<!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <?php
    	include 'CPI.php';
    	include 'eigenvector.php';
    ?>
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
	          <a class="navbar-brand" href="#">Sistem Personalia DSS</a>
	        </div>
	        <div>
	          <ul class="nav navbar-nav">
	            <li class="active"><a href="index.php">Home</a></li>
	          </ul>
	        </div>
	      </div>
	    </nav>

	    
	    <div class="container" align="center">
	    <h2>Peringkat Kandidat</h2>
	    <h2><?php echo $_POST['optradio'];?></h2>
	    <h3>Dengan Model AHP</h3>
				<table class="table">
		          <thead>
		            <tr>
		            	<th>Peringkat</th>
		            	<th>ID Kandidat</th>
		            	<th>Nama</th>
		            	<th>Nilai</th>
		            </tr>
		          </thead>
		          <tbody>
		          	<tr>
		          		<td>1</td>
		          		<td><?php echo $ranking[0][0]; ?></td>
		          		<td><?php echo $ranking[0][1]; ?></td>
		          		<td><?php echo $ranking[0][2]; ?></td>
		          	</tr>
		          	<tr>
		          		<td>2</td>
		          		<td><?php echo $ranking[1][0]; ?></td>
		          		<td><?php echo $ranking[1][1]; ?></td>
		          		<td><?php echo $ranking[1][2]; ?></td>
		          	</tr>
		          	<tr>
		          		<td>3</td>
		          		<td><?php echo $ranking[2][0]; ?></td>
		          		<td><?php echo $ranking[2][1]; ?></td>
		          		<td><?php echo $ranking[2][2]; ?></td>
		          	</tr>
		          </tbody>
		          </table>
		          </div>
		   
	    <div class="container" align="center">
	    <h3><br><br>Dengan Model CPI</h3>
				<table class="table">
		          <thead>
		            <tr>
		            	<th>Peringkat</th>
		            	<th>ID Kandidat</th>
		            	<th>Nama</th>
		            	<th>Nilai</th>
		            </tr>
		          </thead>
		          <tbody>
		          	<tr>
		          		<td>1</td>
		          		<td><?php echo $skor_array[0][0]; ?></td>
		          		<td><?php echo $skor_array[0][1]; ?></td>
		          		<td><?php echo $skor_array[0][7]; ?></td>
		          	</tr>
		          	<tr>
		          		<td>2</td>
		          		<td><?php echo $skor_array[1][0]; ?></td>
		          		<td><?php echo $skor_array[1][1]; ?></td>
		          		<td><?php echo $skor_array[1][7]; ?></td>
		          	</tr>
		          	<tr>
		          		<td>3</td>
		          		<td><?php echo $skor_array[2][0]; ?></td>
		          		<td><?php echo $skor_array[2][1]; ?></td>
		          		<td><?php echo $skor_array[2][7]; ?></td>
		          	</tr>
		          </tbody>
		          </table>
		    </div>

		

	    </body>
</html>