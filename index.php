<?php
session_start();
echo '<link rel="stylesheet" href="style.css">';
require_once("class/utilisateur.php");

define('BASE_PATH', '/escape/');

$pages = [
    'accueil' => ['file' => 'views/accueil.php', 'code' => null],
    'secret' => ['file' => 'views/secret.php', 'code' => null],
    'secret2' => ['file' => 'views/secret2.php', 'code' => '7DD4SX'],
    'secret3' => ['file' => 'views/secret3.php', 'code' => 'ABKDJ7'],
    'secret4' => ['file' => 'views/secret4.php', 'code' => '8DE74C'],
    'verif' => ['file' => 'views/verif.php', 'code' => null]
];

$page = isset($_GET['page']) ? $_GET['page'] : 'accueil';

if (isset($pages[$page])) {
    $pageData = $pages[$page];
    $filePath = $pageData['file'];
    $requiredCode = $pageData['code'];

    if ($requiredCode !== null) {
        if (!isset($_GET['code']) || $_GET['code'] !== $requiredCode) {
            echo "<p style='color: red;'>Accès refusé : Code incorrect ou manquant !</p>";
            exit();
        }
    }

    require_once $filePath;
} else {
    require_once $pages['accueil']['file'];
}
