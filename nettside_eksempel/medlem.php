<?php
session_start();

// Hvis brukeren ikke er logget inn, send til forsiden
if (!isset($_SESSION["innlogget"])) {
    header("Location: index.php");
    exit();
}
?>

?>
<!DOCTYPE html>
<html lang="no">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Medlemsområde</title>
</head>
<body>
<div class="container">
    <h1>Velkommen til medlemsområdet</h1>


    <p> Du har fullført testen og fått tilgang.</p>
    <p> Systemet lover en belønning på slutten. <strong>The cake is a lie.</strong>  </p>

    <p>
        <em>Gåte:</em><br>
        Hvis et system alltid lover belønning,
        men aldri leverer hvem er det egentlig som blir testet?
    </p>


    <form action="logout.php" method="post">
        <button type="submit">Logg ut</button>
    </form>
</div>
</body>
</html>
