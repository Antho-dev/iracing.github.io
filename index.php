<?php
/* session_start()
    session_destroy()*/

    /* PHPSESSID */
    session_start();

    $_SESSION['username'] = 'jachampagne'
?>




<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Cours PHP</title>
</head>
<body>
    <h1>Sessions en PHP</h1>

    <p>Bonjour <?= $_SESSION['username'] ?></p>
</body>
</html>