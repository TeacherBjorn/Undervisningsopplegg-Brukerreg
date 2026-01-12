<?php
session_start();
session_unset();      // Fjerner alle session-variabler
session_destroy();    // Sletter session
header("Location: index.php");
exit();
