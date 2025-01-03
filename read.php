<?php
try {
    $bdd = new PDO('mysql:host=localhost;dbname=tache', 'root', '');

    $stmt = $bdd->query('SELECT titre, descri FROM liste');
    $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}
?>
