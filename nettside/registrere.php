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
// Sender bruker til en spesifikk nettside, eks medlemsområde. 
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
    <title>Registrer bruker</title>
         <link rel="stylesheet" href="styles.css">
</head>
<body>

<div class="topnav">
  <a class="active" href="index.php">Hjem</a>
  <a href="register.php">Register</a>
  <a href="kontakt.php">Kontakt</a>
  <a href="info.php">Informasjon</a>
</div> 



<h1>Registrer deg</h1>

<form method="post">
    <label>Navn:</label><br>
    <input type="text" name="navn" required><br><br>

    <label>E-post:</label><br>
    <input type="email" name="epost" required><br><br>

    <label>Passord:</label><br>
    <input type="password" name="passord" required><br><br>

    <button type="submit" name="registrer">Registrer</button>
</form>

</body>
</html>
