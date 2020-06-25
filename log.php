<?php
session_start();
$connect=mysqli_connect("localhost", "root","", "NombresBD");

if (isset($_POST["NameR"]) && isset($_POST["pass"])){
	$NameR=mysqli_real_escape_string($connect, $_POST["NameR"]);
	$pass=mysqli_real_escape_string($connect, $_POST["pass"]);
	$sql="SELECT NameR FROM Register WHERE (NameR= '$NameR' OR email='$NameR') AND pass= '$pass' ";

	$result=mysqli_query($connect,$sql);

	$num_row = mysqli_num_rows($result);

	if ($num_row==1) {
		$data = mysqli_fetch_array($result);
		
		$_SESSION["NameR"] = $data["NameR"];

		echo 1;

	}else{
		echo "error1";
	}
	
}else{
    echo "error2";
}


?>

