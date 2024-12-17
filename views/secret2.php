<!DOCTYPE html>
<html>
<head>
    <title>Salle 2</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <h1>Espace de commentaire</h1>
    <form method="POST" action="">
        <textarea name="comment" required></textarea>
        <input name="code" value="ABKDJ7" type="hidden">
        <br><br>
        <button type="submit">Envoyer</button>
    </form>

    <h2>Votre commentaire :</h2>
    <div>
        <?php
        // Vérification des commentaires
        if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['comment'])) {
            if (stripos($_POST['comment'], '<script>') !== false) {
                echo "<h1 style='color: green;'>Code secret : ABKDJ7</h1>";
            } else {
                echo "<p style='color: red;'>Erreur : Votre commentaire ne contient pas le code requis.</p>";
            }
        }
        ?>
    </div>

    <h1>Salle 2</h1>
    <form method="POST" action="">
        <label for="code">Entrez le code :</label>
        <input type="text" name="code" required>
        <input type="submit" value="Salle suivante">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['code']) && !isset($_POST['comment'])) {
        if ($_POST['code'] === 'ABKDJ7') {
            header("Location: index.php?page=secret3&code=ABKDJ7");
            exit();
        } else {
            echo "<p style='color: red;'>Code incorrect !</p>";
        }
    }
    ?>
</body>
</html>
