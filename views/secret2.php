<?php
if (isset($_GET['code']) && $_GET['code'] == '7DD4SX') {
    echo "<h1>Page secrète numéro 2 !</h1>";
} else {
    echo "<h1>Code incorrect</h1>";
    exit();
}
?>

<link rel="stylesheet" href="../style.css">
<body>
    <h1>Espace de commentaire</h1>
    <form method="GET">
        <textarea name="comment"></textarea>
        <input name="code" value="7DD4SX">
        <br><br>
        <button type="submit">Envoyer</button>
    </form>

    <h2>Votre commentaire :</h2>
    <div>
        <?php
        if (isset($_GET['comment'])) {
            echo $_GET['comment']; 

        }
        if (isset($_GET['comment']) == "<script>alert('XSS');</script> ") {
            echo "<h1>Code secret : ABKDJ7 </h1>";
        } 
        ?>
    </div>
</body>
