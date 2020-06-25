	
	<!DOCTYPE html>
<html lang="en, es">
<head>
	<title> Nandom </title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<script type="text/javascript" src="../js/jquery.js" ></script>
	<script type="text/javascript" src="../js/ajax.js" ></script>
	<script type="text/javascript" src="../js/ajaxNR.js" ></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script src="https://code.jquery.com/jquery-2.2.2.min.js" ></script>
    <link rel="icon" type="image/x-con" href="../img/Arts.png" >

</head>
<body style="height: 700px" style="weight:100%" >

	<header>
		<div class="container-fluid" >
			<nav  class="navbar navbar-expand-sm fixed-top justify-content-center"  >
				<a class="navbar-brand" href="../index.php"> 
				<img src="../img/Nandom.png" alt="logo" style="width:150px">
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" 
				data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"   
				aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon" ></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarSupportedContent" >
					<ul class="navbar-nav mr-auto">
						<li class="nav-item active" >
							<a class="nav-link" href="../index.php"> Home <span class="sr-only" >(current)</span> </a>
						</li>
					</ul>

						 <div>
						 	<?php echo '<p align=center> <a href="../logout.php"> Logout </a> </p>';	?>

						 </div>

						<form class="form-inline my-2 my-lg-0" method="post" name="Search_form" id="Search_form">
							<div id="padre">
								<div class="row" id="hijo" >
								<div class="col-sm-9"></div>
								<div class="col-sm-2"> <section id="resultados" ></section> </div>
								<div class="col-sm-1"></div>
							</div>
							</div>
						
								<input class="form-control mr-sm-2" type="text" id="Search" name="Search"  placeholder="Search" aria-label="Search">
							<button title="Rename" class="btn my-2 my-sm-0"  > Search</button>

						</form>
				</div>
			</nav>
		</div>

	</header>
	
			<br>
			<br>
			<br>
		
           
<div class="row">
	<div class="col-sm-5">

		
	</div>
	<div class="col-sm-2">
		<table class="table table-bordered table-striped" style="margin-top:20px;">
			<thead class="container">
						<center>
							<div>
							   <p> Your name is: </p>
						    </div>	
						</center>
            </thead>

					<tbody>
							<?php

								//incluimos el fichero de conexion
								include_once('Conexion.php');


										$sql = 'SELECT * FROM NombresP ORDER BY RAND() LIMIT 1';
														foreach ($conn->query($sql) as $row) {
															?>
															<tr>
																<td><?php echo $row['Nombre']; ?></td>
			
															</tr>
											<?php 
											}
							//Cerrar la Conexion
							$conn->close();
							?>
						</tbody>
							</table>
		
	</div>

	<div class="col-sm-5">
    </div>
</div>

<center>
	 <div>
	 	<a href="ShowName.php" >
        <img src="../img/OtherName.png" align="logo" style="width:70px" ></p>	
        </a>

     </div>	

</center>
	


</body>
</html>









