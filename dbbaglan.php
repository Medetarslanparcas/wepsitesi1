
<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "alisveris";

// Bağlantı yarat
$conn = new mysqli($servername, $username, $password, $dbname);
$_SESSION["conn"]=$conn;

// Bağlantıyı kontrol et
if ($conn->connect_error) {
    die("Bağlantı Hatası: " . $conn->connect_error);
}

?>