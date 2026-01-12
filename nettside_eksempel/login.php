<?php
session_start();
include "db.php";

if (isset($_POST["login"])) {
    $epost = $_POST["epost"];
    $passord = $_POST["passord"];

    $sql = "SELECT * FROM brukere WHERE epost = '$epost'";
    $resultat = mysqli_query($conn, $sql);
    $bruker = mysqli_fetch_assoc($resultat);

    if ($bruker && password_verify($passord, $bruker["passord"])) {
        $_SESSION["innlogget"] = true;
        $_SESSION["brukernavn"] = $bruker["navn"];

        header("Location: medlem.php");
        exit();
    } else {
        $feil = "Feil e-post eller passord";
    }
}
?>
<!DOCTYPE html>
<html lang="no">
<head>
    <meta charset="UTF-8">
    <title>Logg inn</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h1>Logg inn</h1>

    <?php if (isset($feil)): ?>
        <p class="feil"><?php echo $feil; ?></p>
    <?php endif; ?>

    <form method="post">
        <input type="email" name="epost" placeholder="E-post" required>
        <input type="password" name="passord" placeholder="Passord" required>
        <button type="submit" name="login">Logg inn</button>
    </form>
</div>

</body>
</html>
