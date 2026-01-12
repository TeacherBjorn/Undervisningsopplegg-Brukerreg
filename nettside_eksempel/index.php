<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include "db.php";

if (isset($_POST["registrer"])) {
    $navn = $_POST["navn"];
    $epost = $_POST["epost"];
    $passord = $_POST["passord"];

    $hash = password_hash($passord, PASSWORD_DEFAULT);

    $sql = "INSERT INTO brukere (navn, epost, passord)
            VALUES ('$navn', '$epost', '$hash')";

    if (mysqli_query($conn, $sql)) {
    header("Location: login.php");
    exit();
    } else {
        echo "<p>Feil: " . mysqli_error($conn) . "</p>";
    }
}
?>




<!DOCTYPE html>
<html lang="no">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brukerregistrering demo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h1> Velkommen til denne nettsiden. </h1>
    <p> Dette er en enkel nettside for å demonstrere brukerregistrering og pålogging. </p>  
    <p> Vennligst registrer deg eller logg inn for å få tilgang til medlemsområdet. </p>
    
    <div class="regskjema"> 

<form method="post">
    <label>Navn:</label><br>
    <input type="text" name="navn" required><br><br>

    <label>E-post:</label><br>
    <input type="email" name="epost" required><br><br>

    <label>Passord:</label><br>
    <input type="password" name="passord" required><br><br>

    <button type="submit" name="registrer">Registrer</button>
</form>
</div>

<h3> Allerede medlem? <a href="login.php">Logg inn her</a></h3> 

</div>


    
</body>
</html>