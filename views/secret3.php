

<?php

$key = "secret"; 
$encrypted_message = base64_encode("CODE SECRET : 8DE74C");  


echo '    Trouve la clée pour déchiffré ce message: '.$encrypted_message;
$result = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $usertest = $_POST['decrypt_key'];
    
    if (!isset($_SESSION['tentatives'])) {
        $_SESSION['tentatives'] = 0;
    }

    if ($usertest == $key) {
        $decrypted_message = base64_decode($encrypted_message);
        $result = "Message déchiffré : $decrypted_message";
    } else {
        $_SESSION['tentatives']++;
        $result = "Clé incorrecte";
        
        if ($_SESSION['tentatives'] >= 3) {
            echo '<p>Indice : La clé est composer de 6 caracteres.</p>';
        }
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['code'])) {
    if ($_POST['code'] == '8DE74C') {
        header("Location: index.php?page=secret4&code=8DE74C");
        exit();
    } else {
        echo "<p style='color: red;'>Code incorrect !</p>";
    }
}

?>

<link rel="stylesheet" href="../style.css">
<form method="POST">
    <label for="decrypt_key">Entrez la clé :</label><br>
    <input type="text" id="decrypt_key" name="decrypt_key" required>
    <button type="submit">Déchiffrer</button>
</form>
<?php   
if ($result) {
    echo "<p>" . htmlspecialchars($result) . "</p>";
}
?>


<!DOCTYPE html>
<html>
<head>
    <title>Salle 3</title>
</head>
<body>


    <h1>Salle 3</h1>
    <form method="POST">
        <label for="code">Entrez le code :</label>
        <input type="text" name="code" required>
        <input type="submit" value="Salle suivante">
    </form>
</body>
</html>
