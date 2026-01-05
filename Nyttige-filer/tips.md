# Diverse tips
- For å kjøre PHP må koden kjøres på serversiden, dette kan gjøres via et webhotell med php eller lokalt ved hjelp av XAMPP. 
- Databasen vi bruker krever også en kjørende serer, og er inkludert i XAMPP-pakken.
- ER-diagrammet hjelper oss til å planlegge.


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