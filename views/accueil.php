<?php
echo '<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="../style.css">
</head>
<body>
    <h1>Bienvenue dans Escape Game</h1>
    <form action="" method="POST">
        <input type="submit" value="Commencer" />
    </form>

</body>
</html>';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    header("Location: index.php?page=secret");
    exit();
}




?>