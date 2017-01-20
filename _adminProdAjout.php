<?php

$nom = $_POST["nom"];
$description = $_POST["description"];
$prix = $_POST["prix"];

 // Se connecter à la BDD
 $pdo = new PDO("mysql:host=localhost;dbname=boutique","root", "");
 $sql =$pdo->query ("INSERT INTO produit (nom,description,prix) VALUES ('$nom','$description','$prix')");
 $sql =$pdo->query ("INSERT INTO categorie (categorie) VALUES ('$nom)");
 
 include '_adminProdAjout.php';
 ?>

