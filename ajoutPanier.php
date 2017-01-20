<?php
session_start();
 // Se connecter à la BDD
$pdo = new PDO("mysql:host=localhost;dbname=boutique","root", "");
$id = $_GET["id"];
$user=$_SESSION["util_connecte"];
echo $id;
echo $user;
//  
// $sql =$pdo->query ("INSERT INTO commande (date_cde,id_client,statut) VALUES ('$nom')");
// 
// include '_adminCat.php';
 ?>

