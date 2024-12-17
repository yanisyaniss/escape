<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $manager = new ManagerUtilisateur();
    if ($manager->checkLogin($username, $password)) {
        $_SESSION['login'] = $username;
        echo "Voici le code pour la nouvelle salle : 7DD4SX";
    } else {
        echo "Nom d'utilisateur ou mot de passe incorrect.";
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['code'])) {
    if ($_POST['code'] == '7DD4SX') {
        header("Location: index.php?page=secret2&code=7DD4SX");
        exit();
    } else {
        echo "<p style='color: red;'>Code incorrect !</p>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Salle 1</title>
</head>
<body>
    <h1>Connexion</h1>
    <form method="POST">
        <label for="username">Nom d'utilisateur :</label>
        <input type="text" name="username" id="username" required>
        <label for="password">Mot de passe :</label>
        <input type="password" name="password" id="password" required>
        <br>
        <input type="submit" value="Se connecter">
    </form>

    <h1>Salle 1</h1>
    <form method="POST">
        <label for="code">Entrez le code :</label>
        <input type="text" name="code" required>
        <input type="submit" value="Salle suivante">
    </form>
</body>
</html>
