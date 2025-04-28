<?php
header('Content-Type: application/json');

// Inclusion des fichiers nécessaires
require_once "../core/disponibiliteC.php";

// Vérifier si un CIN de coach est fourni
if (!isset($_GET['cin']) || empty($_GET['cin'])) {
    echo json_encode([
        'success' => false,
        'message' => 'Le CIN du coach est requis',
        'disponibilites' => []
    ]);
    exit;
}

$cin = intval($_GET['cin']);

// Récupérer les disponibilités du coach
try {
    $disponibiliteC = new DisponibiliteC();
    $disponibilites = $disponibiliteC->afficherDisponibilitesParCoach($cin);
    
    echo json_encode([
        'success' => true,
        'message' => 'Disponibilités récupérées avec succès',
        'disponibilites' => $disponibilites
    ]);
} catch (Exception $e) {
    echo json_encode([
        'success' => false,
        'message' => 'Erreur lors de la récupération des disponibilités: ' . $e->getMessage(),
        'disponibilites' => []
    ]);
}
?>