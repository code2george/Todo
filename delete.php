<?php
include 'connec.php';

if (isset($_GET['id'])) {
    $titre = $_GET['id'];

    $stmt = $bdd->prepare("DELETE FROM liste WHERE titre = :titre");
    $stmt->bindParam(':titre', $titre);
    $stmt->execute();

    header("Location: acceuil.php");
    exit();
}
?>
