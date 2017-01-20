<?php
$id=$_GET["id"];

 // Se connecter à la BDD
 $pdo = new PDO("mysql:host=localhost;dbname=boutique","root", "");
 $sql =$pdo->query ("DELETE FROM categorie WHERE id=$id");
 
 include '_adminCat.php';
 ?>

