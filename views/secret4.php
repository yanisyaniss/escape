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

    <form method="POST" action="verif.php">
        <label>faille XSS :</label><br>
        <fieldset>
        <legend>Choisis la bonne solution:</legend>

        <div>
            <input type="checkbox" id="scales" name="scales" checked />
            <label for="scales">Scales</label>
        </div>

        <div>
            <input type="checkbox" id="horns" name="horns" />
            <label for="horns">Horns</label>
            
        </div>
        </fieldset>
        
        <label im>l'injection SQL :</label><br>
        <img src="../img/image.png" alt="">
        <fieldset>
        <legend>Choisis la bonne solution:</legend>

        <div>
            <input type="checkbox" id="scales" name="scales" checked />
            <label for="scales">Scales</label>
        </div>

        <div>
            <input type="checkbox" id="horns" name="horns" />
            <label for="horns">Horns</label>
            
        </div>

        </fieldset>

        <label>manipulation de session :</label><br>
        <fieldset>
        <legend>Choisis la bonne solution:</legend>

        <div>
            <input type="checkbox" id="scales" name="scales" checked />
            <label for="scales">Scales</label>
        </div>

        <div>
            <input type="checkbox" id="horns" name="horns" />
            <label for="horns">Horns</label>
            
        </div>

        </fieldset>

        
        <label>chiffrement :</label><br>
        <fieldset>
        <legend>Choisis la bonne solution:</legend>

        <div>
            <input type="checkbox" id="scales" name="scales" checked />
            <label for="scales">Scales</label>
        </div>

        <div>
            <input type="checkbox" id="horns" name="horns" />
            <label for="horns">Horns</label>
            
        </div>

        </fieldset>

        <button type="submit">Envoyer</button>
    </form>
</body>
</html>
