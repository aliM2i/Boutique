<?php

$pdo = new PDO("mysql:host=localhost;dbname=boutique", "root", "");

// récupération de l'adresse mail utilisateur et de son mot de passe

$email = $_GET['email'];
$mdp = $_GET['mdp'];
$sql = "SELECT client.* FROM client WHERE client.email='$email' AND client.mdp='$mdp';";

$result = $pdo->query($sql)->fetchAll();

// echo $util_connecte;
if (sizeof($result) > 0) {
    session_start();
    $_SESSION["util_connecte"] = $email;
    
    echo "ok";
} else
    echo "ko";
 include 'index.php';


//print_r($_GET);   
//if (isset($_GET['email']) && !empty($_GET['email']))
//    {
//    $email=$_GET['email'];
//    $mdp=$_GET['mdp'];
//    $sql.=  "WHERE client.email = ".$email;
//    }
//echo ($sql);
//echo $email;
// for(i=0;i<films.length;i++){
//  html +="<tr><td>"+films[i].titre+"</td><td>"+films[i].nom+"</td><td>"+films[i].intitule+"</td><td>"+films[i].nom+"</td><td></tr>";
// $("#id01").html(html);-->