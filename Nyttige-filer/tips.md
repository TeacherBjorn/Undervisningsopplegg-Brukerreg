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


# POST-metoden

## Bruk av POST-metoden

Når vi sender data fra et skjema på en nettside til en server, må vi velge **hvordan** dataene skal sendes. Dette gjøres ved hjelp av en HTTP-metode. En av de vanligste metodene er **POST**.

### Hva er POST?
POST brukes når vi vil sende data **fra bruker til server**, for eksempel:
- skjemaer for innlogging
- registrering av brukere
- lagring av data i databaser

Data som sendes med POST vises **ikke i adressefeltet** i nettleseren.

### Hvorfor bruke POST?
POST brukes ofte fordi:
- dataene ikke er synlige i URL-en
- det er tryggere enn GET for sensitiv informasjon
- det kan sendes større mengder data
- det er standard metode for å sende data til databaser

### Eksempel: HTML-skjema med POST
```html
<form action="lagre.php" method="post">
    <label for="navn">Navn:</label>
    <input type="text" id="navn" name="navn">

    <label for="epost">E-post:</label>
    <input type="email" id="epost" name="epost">

    <button type="submit">Send</button>
</form>
```



### Eksempel: HTML-skjema med POST
```php
<?php
$navn = $_POST['navn'];
$epost = $_POST['epost'];

echo "Navn: $navn <br>";
echo "E-post: $epost";
?>
```

I PHP henter vi dataene ved hjelp av $_POST.

## Kort oppsummert

- POST brukes til å sende data fra skjema til server
- Dataene er ikke synlige i URL-en
- POST er godt egnet når vi skal lagre data eller håndtere brukerinformasjon