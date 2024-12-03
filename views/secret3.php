<?php

if (isset($_GET['code']) && $_GET['code'] == 'ABKDJ7') {
    echo "<h1>Page secrète numéro 3 !</h1>";
} else {
    echo "<h1>Code incorrect</h1>";
    exit();
}
$key = "secret"; 
$encrypted_message = base64_encode("CODE SECRET : 8DE74C");  
$result = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user_key = $_POST['decrypt_key']; 

    if ($user_key === $key) {
        $decrypted_message = base64_decode($encrypted_message);
        $result = "Message déchiffré : $decrypted_message";
    } else {
        $result = "Clé incorrecte";
    }
}
?>

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

