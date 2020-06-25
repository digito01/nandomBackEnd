 <?php
$servername = "localhost";
$username = "root";
$password = "";
$db="NombresBD";



// Create connection  /  Crear conexión
$conn = new mysqli($servername, $username, $password, $db);

// Check connection  /  verificar conexión
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
