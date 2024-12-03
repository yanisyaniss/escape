<?php
session_start();
if (isset($_GET['code']) && $_GET['code'] === '8DE74C') {
    echo "<h1>Page secrète numéro 4</h1>";
} else {
    echo "<h1>Code incorrect</h1>";
    exit();
}
?>

    <p>Trouvez et corrigez les failles  :</p>
    <ul>
        <li>Faille XSS</li>
        <li>Injection SQL</li>
        <li>Manipulation de session</li>
    </ul>

    <form method="POST" action="test.php">
        <label>faille XSS :</label><br>
        <textarea name="xss" required></textarea><br>
        <label>l'injection SQL :</label><br>
        <textarea name="sql" required></textarea><br>
        <label>manipulation de session :</label><br>
        <textarea name="session" required></textarea><br>
        <button type="submit">Envoyer</button>
    </form>
</body>
</html>
