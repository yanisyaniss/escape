<?php
$key = "secret"; 
$encrypted_message = base64_encode("gagné !");  
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

