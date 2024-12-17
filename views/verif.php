<?php
session_start();
$bonnes_reponses = [
    'xss' => ['scales'], 
    'sql' => ['scales'], 
    'session' => ['horns'],
    'crypto' => ['horns'],
];

$reponses_correctes = true;
foreach ($bonnes_reponses as $question => $reponse_correcte) {
    if (!isset($_POST[$question])) {
        $reponses_correctes = false;
        break;
    }
}

if ($reponses_correctes) {
    echo "<h1>VICTOIRE !</h1>";
} else {
    echo "<h1>Réponses incorrectes, essayez encore !</h1>";
    echo "<a href='../index.php?page=secret4'>Réessayer</a>";

}
?>