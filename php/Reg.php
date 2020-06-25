<?php
$conexion=mysqli_connect('localhost','root','','NombresBD');

$NameR=$_POST["NameR"];
$email=$_POST["email"];
$pass=$_POST["pass"];

$sql="SELECT * FROM Register WHERE email='$email' ";
$eject=mysqli_query($conexion,$sql);

$check_email=mysqli_num_rows($eject);

if($sql === false) {
  echo "error while executing mysql: " . mysqli_error($NombresBD);
 } else {
  // move on with your normal skript
}



if ($check_email==1) {
	echo "<div id='ParaReg' name='ParaReg' > <h4> The email is already registered </h4> </div> ";
	exit();
}else{
	$insert="INSERT INTO Register(NameR, email, pass) VALUES('$NameR','$email', '$pass')";
    $eject=mysqli_query($conexion,$insert);

    if ($eject) {
    	echo "<div id='ParaReg' name='ParaReg'  > <h4> The user has been successfully registered </h4> </div>";
    }
}

?> 

