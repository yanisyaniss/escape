<?php
session_start();
if (isset($_GET['code']) && $_GET['code'] === '8DE74C') {
    echo "<h1>Page secrète numéro 4</h1>";
} else {
    echo "<h1>Code incorrect</h1>";
    exit();
}
?>
<link rel="stylesheet" href="../style.css">
    <p>Trouvez et corrigez les failles :</p>
    <form method="POST" action="verif.php">

        <label>Faille XSS :</label><br>
        <img src="../img/image2.png" alt="">
        <fieldset>
            <legend>Choisis la bonne solution :</legend>
            <div>
                <input type="radio" id="xss1" name="xss" value="scales" />
                <label for="xss1">Utiliser htmlspecialchars()</label>
            </div>
            <div>
                <input type="radio" id="xss2" name="xss" value="horns" />
                <label for="xss2">Utiliser strip_tags()</label>
            </div>
            <div>
                <input type="radio" id="xss3" name="xss" value="hornss" />
                <label for="xss3">Filtrer manuellement les script </label>
            </div>
        </fieldset>

        <label>Injection SQL :</label><br>
        <img src="../img/image.png" alt="">
        <fieldset>
            <legend>Choisis la bonne solution :</legend>
            <div>
                <input type="radio" id="sql1" name="sql" value="scales" />
                <label for="sql1">Scales</label>
            </div>
            <div>
                <input type="radio" id="sql2" name="sql" value="horns" />
                <label for="sql2">Horns</label>
            </div>
            <div>
                <input type="radio" id="sql3" name="sql" value="horns" />
                <label for="sql3">Horns</label>
            </div>
        </fieldset>

        <label>Manipulation de session :</label><br>
        <fieldset>
            <legend>Choisis la bonne solution :</legend>
            <div>
                <input type="radio" id="session1" name="session" value="scales" />
                <label for="session1">Scales</label>
            </div>
            <div>
                <input type="radio" id="session2" name="session" value="horns" />
                <label for="session2">Horns</label>
            </div>
            <div>
                <input type="radio" id="session3" name="session" value="horns" />
                <label for="session3">Horns</label>
            </div>
        </fieldset>

        <label>Chiffrement :</label><br>
        <img src="../img/image3.png" alt="">
        <fieldset>
            <legend>Choisis la bonne solution :</legend>
            <div>
                <input type="radio" id="crypto1" name="crypto" value="scales" />
                <label for="crypto1">Scales</label>
            </div>
            <div>
                <input type="radio" id="crypto2" name="crypto" value="horns" />
                <label for="crypto2">Horns</label>
            </div>
            <div>
                <input type="radio" id="crypto3" name="crypto" value="horns" />
                <label for="crypto3">Horns</label>
            </div>
        </fieldset>

        <button type="submit">Envoyer</button>
    </form>
