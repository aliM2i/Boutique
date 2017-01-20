<?php

/* ;
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$nom = $_POST["nom"];
$prenom = $_POST["prenom"];
$num_voie = $_POST["num_voie"];
$ville= $_POST["ville"];
$cp= $_POST["cp"];
$mdp = $_POST["mdp"];
$tel = $_POST["tel"];
$email = $_POST["email"];

// print_r ($_POST);
 // Se connecter à la BDD
 $pdo = new PDO("mysql:host=localhost;dbname=boutique","root", "");
 $sql =$pdo->query ("INSERT INTO client (nom,prenom,num_voie,ville,cp,mdp,email)
    VALUES ('$nom','$prenom','$num_voie','$ville','$cp','$mdp', '$email')");
       
 ?>