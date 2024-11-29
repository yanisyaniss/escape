<?php
Class Utilisateur{

private $id;
private $nom;
private $prenom;
private $mail;
private $login;
private $mdp;

public function __construct($id,$nom,$prenom,$mail,$login,$mdp){
    $this->id=$id;
    $this->nom = $nom;
    $this->prenom= $prenom;
    $this->mail= $mail;
    $this->login= $login;
    $this->mdp= $mdp;
}

//  id
public function getId() {
    return $this->id;

}
public function setId($Id) {
    $this->id = $id;
}
//  nom
public function getNom() {
    return $this->nom;

}

public function setNom($nom) {
    $this->nom = $nom;
}
//  prenom
public function getPrenom() {
    return $this->prenom;

}

public function setPrenom($prenom) {
    $this->prenom = $prenom;
}
//  mail
public function getMail() {
    return $this->mail;

}

public function setMail($mail) {
    $this->mail = $mail;
}
//  login
public function getLogin() {
    return $this->login;

}

public function setLogin($login) {
    $this->login = $login;
}
//  mdp
    public function getMdp() {
        return $this->mdp;

    }

    public function setMdp($mdp) {
        $this->mdp = $mdp;
    }
}

class ManagerUtilisateur {
    private $bd;

    public function __construct() {
        $this->bd = new PDO("mysql:host=localhost;dbname=escape", 'root', '', array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
    }

    public function checkLogin($login, $password){
        $test = "SELECT * FROM utilisateur WHERE login='$login' AND password='$password'";
        $stmt = $this->bd->query($test);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($result) {
            return true; 
        } 
    }
    

    
    public function getUserDetailsByUsername($username){
        $conn = $this->bd;
        $stmt = $conn->prepare("SELECT id, nom, prenom FROM utilisateur WHERE login = :username");
        $stmt->bindParam(':username', $username);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return [
            'id' => $result['id'],
            'nom' => $result['nom'],
            'prenom' => $result['prenom']
        ];
    }
    

    public function register($username, $password, $email, $nom, $prenom){ 
        $conn = $this->bd;
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "INSERT INTO utilisateur (login, password, mail, nom, prenom) VALUES (:login, :password, :email, :nom, :prenom)";
        $stmt = $conn->prepare($sql);            
        $stmt->bindParam(':login', $username);
        $stmt->bindParam(':password',    $password);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':nom', $nom);
        $stmt->bindParam(':prenom', $prenom);
        $stmt->execute();   
        return true;
    }

    public function existeUtilisateur($username, $email) {
        $sql = "SELECT COUNT(*) FROM utilisateur WHERE login = :login OR mail = :mail";
        $stmt = $this->bd->prepare($sql);
        $stmt->bindParam(':login', $username);
        $stmt->bindParam(':mail', $email);
        $stmt->execute();
        return $stmt->fetchColumn() > 0;
    }
    
    public function checkSecretCode($submitted_code) {
        $sql = "SELECT codesecret FROM secretcode LIMIT 1";
        $result = $this->bd->query($sql);
        $stored_code = $result->fetchColumn(); 
        
        if ($submitted_code == $stored_code) {
            return "Le code secret est correct ! Le code secret est : " . $stored_code;
        } else {
            return "Le code secret est incorrect. Essayez à nouveau.";
        }
    }
    
}