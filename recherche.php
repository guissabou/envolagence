<?php
if (isset($_GET['destination'])) {
    $destination = htmlspecialchars($_GET['destination']);
    $date_depart = htmlspecialchars($_GET['date_depart']);
    $date_retour = htmlspecialchars($_GET['date_retour']);

    // Logique pour traiter les recherches et afficher les résultats
    echo "Recherche pour : $destination du $date_depart au $date_retour.";
} else {
    echo "Veuillez entrer une destination et des dates.";
}
?>