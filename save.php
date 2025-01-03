<?php
// Connexion à la base de données
include 'connec.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $titre = $_POST['task_title'];
    $descri = $_POST['task_desc'];

    try {
        $stmt = $bdd->prepare("INSERT INTO liste (titre, descri) VALUES (:titre, :descri)");
        $stmt->bindParam(':titre', $titre);
        $stmt->bindParam(':descri', $descri);
        $stmt->execute();
        header("Location: acceuil.php");
        exit();
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}

// Récupération des tâches existantes
try {
    $stmt = $bdd->query("SELECT titre, descri FROM liste");
    $tasks = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
