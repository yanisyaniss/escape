
<?php
require_once("../class/utilisateur.php");

echo '<form action="" method="post">
        <label for="username">Nom utilisateur :</label>
        <input type="text" name="username" id="username" required />
          
        <label for="email">Email :</label>
        <input type="email" name="email" id="email" required />
        
        <label for="nom">Nom :</label>
        <input type="text" name="nom" id="nom" required />
        
        <label for="prenom">Prenom :</label>
        <input type="text" name="prenom" id="prenom" required />
        
        <label for="telephone">Numero Telephone :</label>
        <input type="text" name="telephone" id="telephone" required />
        
        <label for="password">Mot de passe :</label>
        <input type="password" name="password" id="password" required />
        </br>
        <input type="submit" value="Valider" />
    </form>';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        
        $manager = new ManagerUtilisateur();
        
        if ($manager->existeUtilisateur($username, $email) == false) {
            $manager->register($username, $password, $email, $nom, $prenom);
            echo "<script>alert('Inscription effectuée avec succès');</script>";
            header("Location: index.php?act=login");
            exit;
        } else if ($manager->existeUtilisateur($username, $email)) {
            // echo "<script>alert('Nom utilisateur ou email déjà utilisé.');</script>";
            echo "<h4 style='color: red;'>Nom utilisateur ou email déjà utilisé</h4>";
        }
    }
    ?>
    
<link rel="stylesheet" href="../style.css">