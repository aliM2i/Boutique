<?php

$nom = $_POST["nom"];

 // Se connecter à la BDD
 $pdo = new PDO("mysql:host=localhost;dbname=boutique","root", "");
 $sql =$pdo->query ("INSERT INTO categorie (intitule) VALUES ('$nom')");
 
 include '_adminCat.php';
 ?>

