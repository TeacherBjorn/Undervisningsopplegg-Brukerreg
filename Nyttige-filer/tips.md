# Diverse tips



# Tilkobling til database

Følgende: 

<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "databasenavn";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>



# HTML -> PHP


# Koble til databasen i hver fil 