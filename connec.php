<?php
try 
{ 
$bdd = new PDO('mysql:host=localhost;dbname=tache', 'root', ''); 
}catch (Exception $e) 
{ 
die('Erreur : ' . $e->getMessage());}
?>
