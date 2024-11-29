<?php 
require_once("../class/utilisateur.php");

echo '<body>
    <form action="" method="post">
        <label for="username">Nom d\'utilisateur :</label>';
        if(isset($_COOKIE['cookies_username'])){
        echo'<input type="text" name="username" id="username" required value="'. $_COOKIE['cookies_username'] .'" />';
        }
        else{
            echo'<input type="text" name="username" id="username" required />';
        }
echo'<label for="password">Mot de passe :</label>
        <input type="password" name="password" id="password" />
        <br>
        
        <input type="submit" value="Se connecter" />
    </form>';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $manager = new ManagerUtilisateur();
    if ($manager->checkLogin($username, $password)) {
        $_SESSION['login'] = $username;

        header("Location: accueil.php");
        exit();
    } else {
        echo "Nom d'utilisateur ou mot de passe incorrect.";
    }
}
?>
